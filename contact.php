<?php
    $n=$_POST['name'];
    $e=$_POST['email'];
    $c=$_POST['comments'];

if(empty($n)||empty($e)||empty($c)){
    echo '<script type="text/javascript">alert("Please fillup all the fields");</script>';
    include ('home.html');
}
else
{
    include('config.php');
    $sql="INSERT INTO contact(name,email,comments) VALUES('$n','$e','$c')";
    mysqli_query($con,$sql);
    echo '<script type="text/javascript">alert("Message Sent.");</script>';
    include ('home.html');
}
?>

