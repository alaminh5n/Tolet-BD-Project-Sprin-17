<?php
    session_start();
    if(isset($_SESSION['adminid'])==FALSE){
        header('Location:admin.html');
    }
    include('config.php');
            $n=$_SESSION['adminid'];
            $sql= "SELECT *FROM admin WHERE adminid='$n'";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($res);
            $n=$row['name'];
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
    
    <div class="jumbotron text-center" id="d1">
    <br><img id="c2" src="img/Home-Logo-White.png" height="10%" width="10%">
    <h1 id="ha">Welcom to Admin Panel</h1>
    <p id="p1"><?php echo $n; ?></p>
    </div>
    
    </body>
</html>