<?php
    include('config.php');
        $aid=$_POST['adminid'];
        $pw=$_POST['adminpassword'];
    if(empty($aid)||empty($pw)){
    echo '<script type="text/javascript">alert("Please fillup all the fields");</script>';
    include('admin.html');
    }
    else{
		$sql="SELECT adminid,adminpassword FROM admin WHERE adminid='$aid' and adminpassword='$pw'";
		$res=mysqli_query($con,$sql);
		$row=mysqli_num_rows($res);
		if($row!=1){
			echo '<script type="text/javascript">alert("Invalid User ID or Password");</script>';
            include('admin.html');
		}
		else{
			header("Location: adminpanel.php");
            session_start();
            $_SESSION['adminid']=$aid;
		}
}
?>