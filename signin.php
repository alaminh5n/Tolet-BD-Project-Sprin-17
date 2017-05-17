<?php
  include('config.php');
    $un=$_POST['userid'];
    $pw=$_POST['password'];
if(empty($un)||empty($pw)){
    echo '<script type="text/javascript">alert("Please fillup all the fields");</script>';
    include('home.html');
}
else{
		$sql3="SELECT userid,password FROM user WHERE userid='$un' and password='$pw'";
		$res=mysqli_query($con,$sql3);
		$row=mysqli_num_rows($res);
		if($row!=1){
			echo '<script type="text/javascript">alert("Invalid User ID or Password");</script>';
		}
		else{
			header("Location: wall.php");
            session_start();
            $_SESSION['userid']=$un;
		}
}
?>