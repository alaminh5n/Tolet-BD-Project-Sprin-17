<?php
    session_start();
    if(isset($_SESSION['adminid'])==FALSE){
        header('Location:admin.html');
    }
?>
<!DOCTYPE html>
<html langu="en">
<head>
    <title>Admin Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="adminalladd.php">All Add</a></li>
                    <li><a href="adminallmsg.php">Messages</a></li>
                    <li><a href="adminallusers.php">All Users</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
     <div class='container-fluid'>
                    <div class='row'>
                    <div class='col-sm-3'></div>
                    <div class='col-sm-6' >
                       
    
    <?php
            include('config.php');
            $sql="SELECT user.fname,user.lname,user.phone,postadd.hometype,postadd.rent,postadd.address,postadd.area,postadd.floor,postadd.city,postadd.postalcode,postadd.description FROM user INNER JOIN postadd ON user.userid = postadd.userid";
            
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($res);
                        
            if($row==0){
                include ('noadd.php');
            }
        
            else{
                while($row!=null){
                $fn=$row['fname'];
                $ln=$row['lname'];
                $phn=$row['phone'];
                $ht=$row['hometype'];
                $rt=$row['rent'];
                $ad=$row['address'];
                $ar=$row['area'];
                $flr=$row['floor'];
                $ct=$row['city'];
                $pc=$row['postalcode'];
                $dpn=$row['description']; 
                    
                echo "<div class='row'>
                    <div class='col-sm-12' id='d4'>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <b>Owner Name: </b>$fn $ln
                        </div>
                        <div class='col-sm-4'>
                            <b>Home Type: </b>$ht
                        </div>
                        <div class='col-sm-4'>
                            <b>Area: </b>$ar 
                        </div>
                    </div><br>
                    <div class='row'>
                        <div class='col-sm-4'>
                             <b>Floor: </b>$flr 
                        </div>
                        <div class='col-sm-4'>
                            <b>Rent: </b>$rt
                        </div>
                        <div class='col-sm-4'>
                            <b>Phone: </b>$phn
                        </div>
                    </div><br>
                    <div class='row'>
                        <div class='col-sm-4'>
                             <b>Address: </b>$ad
                        </div>
                        <div class='col-sm-4'>
                             <b>Postal Code: </b>$pc
                        </div>
                        <div class='col-sm-4'>
                            <b>City: </b>$ct
                        </div>
                    </div><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                             <b>Description: </b>$dpn
                        </div>
                    </div>
                    </div>
                    </div><br>"
                    ;
                $row=mysqli_fetch_assoc($res);
            }
            }
        ?>
                        </div>
                    </div>
                    </div>
    
    
    
    </body>
</html>