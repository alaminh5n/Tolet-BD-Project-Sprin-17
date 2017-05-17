<?php
    session_start();
    if(isset($_SESSION['userid'])==FALSE){
        header('Location:home.html');
    }
?>
<!DOCTYPE html>
<html langu="en">
<head>
    <title>Home</title>
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
                <a class="navbar-brand" href="#">WaLL</a>
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
    <h1 id="ha">Welcome To<br> ToLet BD</h1>
    <p id="p1">You can find yours desier flat, room, house or mate</p>
    <p></p>
    </div>
    
    <div id="" class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h3 class="text-center"> Find your Desire Home </h3><br><br><br>
            
            <div class='row'>
                    <div class='col-sm-1'></div>
                    <div class='col-sm-10' >
                       
    
    <?php
            include('config.php');
            $ud=$_SESSION['userid'];
            $sql="SELECT *FROM postadd";
           // $sql5="SELECT *FROM user where userid='$ud'";
                        
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($res);
            
            //$res5=mysqli_query($con,$sql5);
            //$row5=mysqli_fetch_assoc($res5);
                        
            if($row==0){
                include ('noadd.php');
            }
        
            else{
                while($row!=null){
                //$fn=$row5['fname'];
                //$ln=$row5['lname'];
                $phn=$row['phone'];
                $us=$row['userid'];
                $ht=$row['hometype'];
                $rt=$row['rent'];
                $ad=$row['address'];
                $ar=$row['area'];
                $flr=$row['floor'];
                $ct=$row['city'];
                $pc=$row['postalcode'];
                $dpn=$row['description']; 
                    
                echo "<div class='row'>
                    <div class='col-sm-12' id='d5'>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <b>Phone: </b>$phn
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
                            <b>Address: </b>$ad
                        </div>
                    </div><br>
                    <div class='row'>
                        <div class='col-sm-4'>
                             <b>City: </b>$ct
                        </div>
                        <div class='col-sm-4'>
                             <b>Postal Code: </b>$pc
                        </div>
                        <div class='col-sm-4'>
                            
                        </div>
                    </div><br><br>
                    <div class='row'>
                        <div class='col-sm-10'>
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
        <div class="col-sm-1"></div>
    </div>
    </div>
    </body>
</html>