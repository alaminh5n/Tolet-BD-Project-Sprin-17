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
    <h1 id="ha">Find your Desire Home</h1>
    <p id="p1">Search and book your Desire Flat, Room or House</p>
    <p></p>
    </div>
    
    <div id="" class="container-fluid text-center">
        <div class="row">
            <div class='col-sm-3'></div>
            <div class='col-sm-6' id='d5'>
                <p id="p2">Search by Rent</p><br>
                <div class='col-sm-4'>
                    <a href="rent1.php" class="btn btn-primary btn-block" id="d3">Less than 5,000 BDT</a>
                </div>
                <div class='col-sm-4'>
                    <a href="rent2.php" class="btn btn-primary btn-block" id="d3">5,000 - 20,000 BDT</a>
                </div>
                <div class='col-sm-4'>
                    <a href="rent3.php" class="btn btn-primary btn-block" id="d3">More than 20,000 BDT</a>
                </div>
            </div> 
            <div class='col-sm-3'></div>
        </div>
    </div>    
    
    <div id="" class="container-fluid text-center">
        <div class="row">
            <div class='col-sm-3'></div>
            <div class='col-sm-6' id='d5'>
                <p id="p2">Search by Area</p><br>
                <div class='col-sm-3'>
                    <a href="gulshan.php" class="btn btn-primary btn-block" id="d3">Gulshan</a>
                </div>
                <div class='col-sm-3'>
                    <a href="bashundhora.php" class="btn btn-primary btn-block" id="d3">Bashundhora</a>
                </div>
                <div class='col-sm-3'>
                    <a href="banani.php" class="btn btn-primary btn-block" id="d3">Banani</a>
                </div>
                <div class='col-sm-3'>
                    <a href="mohakhali.php" class="btn btn-primary btn-block" id="d3">Mohakhali</a>
                </div>
            </div> 
            <div class='col-sm-3'></div>
        </div><br>
    </div>
    
    <div id="" class="container-fluid text-center">
        <div class="row">
            <div class='col-sm-3'></div>
            <div class='col-sm-6' id='d5'>
                <p id="p2">Search by Home Type</p><br>
                <div class='col-sm-4'>
                    <a href="flat.php" class="btn btn-primary btn-block" id="d3">Flat</a>
                </div>
                <div class='col-sm-4'>
                    <a href="house.php" class="btn btn-primary btn-block" id="d3">House</a>
                </div>
                <div class='col-sm-4'>
                    <a href="room.php" class="btn btn-primary btn-block" id="d3">Room</a>
                </div>
            </div> 
            <div class='col-sm-3'></div>
        </div><br>
    </div>
    
    <div id="" class="container-fluid text-center">
        <div class="row">
            <div class='col-sm-3'></div>
            <div class='col-sm-6' id='d5'>
                <p id="p2">Search by City</p><br>
                <div class='col-sm-6'>
                    <a href="dhk.php" class="btn btn-primary btn-block" id="d3">Dhaka</a>
                </div>
                <div class='col-sm-6'>
                    <a href="ctg.php" class="btn btn-primary btn-block" id="d3">Chittagong</a>
                </div>
            </div> 
            <div class='col-sm-3'></div>
        </div><br>
    </div>
    </body>
</html>