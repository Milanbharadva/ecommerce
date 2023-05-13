<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile planet</title>
    <link rel="icon" type="image/x-icon" href="./images/web-icon.jpg" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./resp.css">
    <style>
      .active{
    color:#fd0909;
    background-color:black;
  }
  
    </style>
  </head>
  <body>
    <header class="header" id="header">
      <nav>
        <ul class="nav-list">
          <li class="nav-item">
            <img src="./images/logo.png" alt="" height="50px" width="200px" />
          </li>
          <li class="nav-item"><a href="index.php">Home</a></li>
          <li class="nav-item"><a href="about.php" class="active">About us</a></li>
          <li class="nav-item"><a href="contact.php">Contact us</a></li>
          <?php
          if($_SESSION["statussign"]){
            ?>
            <li class="nav-item"><a href="./signout.php">sign out</a></li>
            <?php
          }
          else{
            ?>
            <li class="nav-item"><a href="./signin.html">sign in</a></li>
<?php
          }
          ?>
          <li class="nav-item"><a href="./register.html">register</a></li>
        </ul>
      </nav>
    </header>
          <section>
            <div class="head-section">
                <h1 class="main-heading">
                    About US
                </h1>
            </div>
          </section>

          <div class="about-head-1">
            <div class="div-1">
              <img src="./images/about.png" alt="" class="image-1" >
            </div>
            <div class="text-1">
              <h1 class="heading-1">
              Our Mobile Shop
              </h1>
              <p class="para-1">
              Welcome to my mobile website you can purchase mobile easily and on cheapest price from market value.
              We are giving you offers in every festival so you can enjoy festival with our devices.Happy Purchasing.
              </p>
            </div>
          </div>
          <div class="footerinfo">
            <div class="address">
              <p class="head-add-1">ADDRESS</p>
              <p class="para-add-1">
                "Chamunda Krupa",2-jasraj nagar,behind radhe hotel
                Rajkot-36004,Gujarat,India.
                <p class="para-add-1">
                  (+91)7990892778
                </p>
              </p>
            </div>
          </div>
            <div class="foot-nav">
              <ul class="foot-nav-list">
                <li class="foot-nav-item"><a href="index.php">Home</a></li>
                <li class="foot-nav-item"><a href="#header" class="active">About us</a></li>
                <li class="foot-nav-item"><a href="contact.php">contact us</a></li>
              </ul>
            </div>
  </body>
</html>
