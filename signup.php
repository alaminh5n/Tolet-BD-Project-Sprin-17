<?php
    $ud=$_POST['userid'];
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $em=$_POST['email'];
    $phn=$_POST['phone'];
    $pw=$_POST['password'];
    $cpw=$_POST['cpassword'];

if(empty($ud)||empty($fn)||empty($ln)||empty($em)||empty($phn)||empty($pw)||empty($cpw)){
    echo '<script type="text/javascript">alert("Please fillup all the fields");</script>';
    include('signup.html');
}
elseif(strlen($pw)<6){
    echo '<script type="text/javascript">alert("Password Must be 6 charecters long");</script>';
    include('signup.html');
}
elseif($pw!=$cpw){
    echo '<script type="text/javascript">alert("Password and Confirm Password are not same");</script>';
    include('signup.html');
}
elseif(isset($ud)){
    include('config.php');
    $sql1="SELECT *FROM user WHERE userid='$ud'";
    $res=mysqli_query($con,$sql1);
    $row=mysqli_num_rows($res);
    if($row==1){
        echo '<script type="text/javascript">alert("User ID belongs to other user. Try new User ID.");</script>';
        include('signup.html');
    }
    else
    {
        $sql2="INSERT INTO user (userid,fname,lname,email,phone,password) VALUES('$ud','$fn','$ln','$em','$phn','$pw')";
        mysqli_query($con,$sql2);
        include('confirm.html');
    }
} 
?>

