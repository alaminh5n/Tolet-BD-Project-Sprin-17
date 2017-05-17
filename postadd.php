<?php
    session_start();
    if(isset($_SESSION['userid'])==FALSE){
        header('Location:home.html');
    }
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
    
    <div class="container-fluid">
            <br><br><br>
        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" id="d5">
            <h2 class="text-center">Post your add here...</h2><br><br>
            <p><u>Fill up all the fields with original info.</u></p><br>
            
            <form method="post" action="post.php">
                <div class="input-group">
                    <level for="sel1"><b>Home Type</b></level>
                    <select class="form-control" id="sel1" name="hometype">
                        <option value="House">House</option>
                        <option value="Flat">Flat</option>
                        <option value="Room">Room</option>
                    </select>
                </div><br>
                <div class="row">
                <div class="col-sm-6">
                <label>Rent</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                    <input id="rent" type="number" class="form-control input-lg" name="rent">
                </div>
                </div>
                </div><br>
                <label>Address</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input id="address" type="text" class="form-control input-lg" name="address">
                </div><br>
                <label>Phone</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="phone" type="number" class="form-control input-lg" name="phone" placeholder="Valid Phone Number">
                </div><br>
                <label>Area</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="area" type="text" class="form-control input-lg" name="area">
                </div><br>
                <div class="row">
                <div class="col-sm-4">
                <label>Floor</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                    <input id="floor" type="number" class="form-control input-lg" name="floor">
                </div>
                </div>
                <div class="col-sm-4">
                <label>City</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
                    <input id="city" type="text" class="form-control input-lg" name="city">
                </div><br>
                </div>
                <div class="col-sm-4">
                <label>Postal Code</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                    <input id="postalcode" type="number" class="form-control input-lg" name="postalcode">
                </div><br>
                </div>
                </div>
                <label>Description</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                    <textarea id="description" type="text" class="form-control input-lg" name="description" placeholder="Write about your given home for rent..."></textarea>
                </div><br>
            
                <button class="btn btn-primary btn-block" type="submit" id="d3">Submit</button>
            </form>
        </div>
        </div>
        
        </div>
    
    </body>
</html>