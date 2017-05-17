<?php
    session_start();
    $ud=$_SESSION['userid'];
    $ht=$_POST['hometype'];
    $rt=$_POST['rent'];
    $ad=$_POST['address'];
    $phn=$_POST['phone'];
    $ar=$_POST['area'];
    $flr=$_POST['floor'];
    $ct=$_POST['city'];
    $pc=$_POST['postalcode'];
    $dpn=$_POST['description'];

    if(empty($ht)||empty($rt)||empty($ad)||empty($phn)||empty($ar)||empty($flr)||empty($ct)||empty($pc)||empty($dpn))
        {
            echo '<script type="text/javascript">alert("Please fillup all the fields");</script>';
            include('postadd.php');
        }

    else
        {
            include('config.php');
            $sql2="INSERT INTO postadd (userid,hometype,rent,address,phone,area,floor,city,postalcode,description) VALUES('$ud','$ht','$rt','$ad','$phn','$ar','$flr','$ct','$pc','$dpn')";
            mysqli_query($con,$sql2);
            include('postconfirm.html');
        } 
?>