<?php
    session_start();
    if(isset($_SESSION['userid'])==FALSE){
        header('Location:home.html');
    }
    
    $u=$_SESSION['userid'];
    include('config.php');
    $sql="SELECT *FROM user where userid='$u'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);
    $f=$row['fname'];
    $l=$row['lname'];
?>
<!DOCTYPE html>
<html langu="en">
<head>
    <title>Post Add</title>
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
    <h1 id="ha">All Posts on ToLetBD</h1>
    <p id="p1">These posts are given by <?php echo $f." ".$l; ?></p>
    <p></p>
    </div>
    
    <div class='container-fluid'>
                    <div class='row'>
                    <div class='col-sm-3'></div>
                    <div class='col-sm-6' >
                       
    
    <?php
            include('config.php');
            $ud=$_SESSION['userid'];
            $sql4="SELECT *FROM postadd where userid='$ud'";
            $sql5="SELECT *FROM user where userid='$ud'";
                        
            $res4=mysqli_query($con,$sql4);
            $row4=mysqli_fetch_assoc($res4);
            
            $res5=mysqli_query($con,$sql5);
            $row5=mysqli_fetch_assoc($res5);
                        
            if($row4==0){
                include ('noadd.php');
            }
        
            else{
                while($row4!=null){
                $fn=$row5['fname'];
                $ln=$row5['lname'];
                $phn=$row5['phone'];
                $ht=$row4['hometype'];
                $rt=$row4['rent'];
                $ad=$row4['address'];
                $ar=$row4['area'];
                $flr=$row4['floor'];
                $ct=$row4['city'];
                $pc=$row4['postalcode'];
                $dpn=$row4['description']; 
                    
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
                $row4=mysqli_fetch_assoc($res4);
            }
            }
        ?>
                        </div>
                    </div>
                    </div>
            
    
    </body>
</html>