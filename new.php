<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <style>
        #register_butto_nav:hover{
            background:#003366;
            color:white;
        }

    </style>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="nab.css">
    <link rel="stylesheet" type="text/css" href="includes/navv.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>
    <nav class="navbar navbar-default" style="margin-bottom: 0px">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img alt="Brand" class="img img-responsive" src="images/logo.png">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse right_nav" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
          <li><a href="index.php" class="a">Home</a></li>
          <li class="dropdown">
            <a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
            <ul class="dropdown-menu">
               <?php include'includes/programs_dropdown.php'; ?>
            </ul>
        </li>
        <li ><a href="gallery.php" class="a">Gallery</a></li>
        <li><a href="notice.php"class="a">Notice</a></li>
        <li class="active"><a href="about.php">About</a></li>
        <li><a href="support.php"class="a">Support</a></li>
        <li>
            <div class="search-container">
              <form action="search.php" method="get" class="" role="search">
                <input class="search" id="searchleft" type="search" name="search" placeholder="Search">
                <label class="button1 searchbutton" for="searchleft"><span class="mglass">&#9906;</span></label>
            </form>
        </div>
    </li>
    

</ul>
<ul class="nav navbar-nav navbar-right">
  <?php

  // database connection
  include('includes/connect.php');
  // nav change connection
  include('includes/signin_disappear_on_login.php');
  ?>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div  class="row" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:75px;">
            <div class="col-md">
                <h3 style="padding-left: 100px;padding-top: 5px;"><i>Gallery</i></h3>
            </div>
        </div>
</div>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
         <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
    </button>
</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>

