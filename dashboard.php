<?php
include "koneksi.php";
session_start();
if(empty($_SESSION['user']))
{
echo "
<script>
location.href='index.php';
</script>
";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/material-font.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Andrean Corparation Programming</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body class="scrollspy" id="homes">
    <!-- navbar -->
    <div class="navbar-fixed">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="validation.php">Validation</a></li>
        <li><a href="statistic.php">Statistic</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <nav class="indigo darken-1">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#homes" class="brand-logo">AGP</a>
            <a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about">About Us</a></li>
              <li><a href="#clients">Client</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="product.php">Other Product</a></li>
              <li><a class="dropdown-trigger" href="#" data-target="dropdown1">
                <i class="icon-user"></i>&nbsp;&nbsp;
                <?php
                $nama = $_SESSION['user'];
                echo $nama?>
              </a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <ul class="sidenav" id="mobile-navas">
      <li class="indigo darken-1 white-text"><a href="login.php"><i class="icon-user"></i>Login Here!</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#clients">Client</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact Us</a></li>
      <li><a href="product.php">Other Product</a></li>
    </ul>
    <!-- ini slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slide/6.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big priority in your life</h3>
            <h5 class="light white-text text-lighten-2">Some to make happines</h5>
            <a href="#contact" class="waves-effect waves-light btn-large indigo darken-2">Contact Us!</a>
          </div>
        </li>
        <li>
          <img src="img/slide/5.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Make Your Good Mood</h3>
            <h5 class="light white-text text-lighten-2">We know how and what you like</h5>
            <a href="#contact" class="waves-effect waves-light btn-large indigo">Contact Us!</a>
          </div>
        </li>
        <li>
          <img src="img/slide/4.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>The Right Website To Advense</h3>
            <h5 class="light white-text text-lighten-2">This's your perpose to life</h5>
            <a href="#contact" class="waves-effect waves-light btn-large indigo">Contact Us!</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- about us -->
    
    <!-- 1920 x 1280 -->
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/script-login.js"></script>
  </body>
</html>