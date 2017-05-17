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
            $sql="SELECT *FROM user";
            
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($res);
                        
            if($row==0){
                echo "No Users";
            }
        
            else{
                while($row!=null){
                $ud=$row['userid'];
                $fn=$row['fname'];
                $ln=$row['lname'];
                $em=$row['email'];
                $phn=$row['phone'];
                $pw=$row['password'];
                    
                echo "<div class='row'>
                    <div class='col-sm-12' id='d4'>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <b>User Name: </b>$fn $ln
                        </div>
                        <div class='col-sm-4'>
                            <b>User ID: </b>$ud
                        </div>
                        <div class='col-sm-4'>
                            <b>Email Address: </b>$em 
                        </div>
                    </div><br>
                    <div class='row'>
                        <div class='col-sm-4'>
                             <b>Password: </b>$pw
                        </div>
                        <div class='col-sm-4'>
                            <b>Phone: </b>$phn
                        </div>
                        <div class='col-sm-4'>
                        </div>
                    </div><br>
                    </div>
                    </div><br>";
                $row=mysqli_fetch_assoc($res);
            }
            }
        ?>
                        </div>
                    </div>
                    </div>
    </body>
</html>