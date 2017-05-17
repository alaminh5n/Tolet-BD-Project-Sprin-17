<?php
    session_start();
    if(isset($_SESSION['userid'])==FALSE){
        header('Location:home.html');
    }
?>
<!DOCTYPE html>
<html langu="en">
<head>
    <title>Profile</title>
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
                <a class="navbar-brand" href="wall.php">WaLL</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="postadd.php">Post Add</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="myadd.php">My Post</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="jumbotron text-center" id="d1">
    <br>
    <h1 id="ha">Personal Information</h1>
    <p id="p1">These informations are only visible to you</p>
    <p></p>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" id="d5">
            <h2 class="text-center">Account Owner Info</h2><br>
            
           <!-- <form method="post" action="pic.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
            <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input id="image" type="file" class="form-control" name="image" placeholder="">
                </div><br>
                </div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary btn-block" type="submit">Upload</button>
                    </div>
                </div>
            </form> -->
            
            
            
            <?php
            include('config.php');
            $ud=$_SESSION['userid'];
            $sql4="SELECT *FROM user where userid='$ud'";
            $res=mysqli_query($con,$sql4);
            $row=mysqli_fetch_assoc($res);
        
            if($row!=null){
                $ud=$row['userid'];
                $fn=$row['fname'];
                $ln=$row['lname'];
                $em=$row['email'];
                $phn=$row['phone'];
                $pw=$row['password'];
                    
                echo "<center><table><tr><td><b>First Name: </b></td><td> $fn</td></tr>
                             <tr><td><b>Last Name: </b></td><td> $ln</td></tr>
                             <tr><td><b>Username: </b></td><td> $ud</td></tr>
                             <tr><td><b>Email: </b></td><td> $em</td></tr>
                             <tr><td><b>Phone: </b></td><td> $phn</td></tr>
                             <tr><td><b>Password: </b></td><td> $pw</td></tr>
                    </table></center>";
                $row=mysqli_fetch_assoc($res);
            }
        ?>
        </div>
            </div>
            </div>
    </body>
</html>