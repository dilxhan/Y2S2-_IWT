<?php
session_start();
require_once("config.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<section class="header">
        <nav>
            <a href="../html/index.html"><img src="../images/logo_png.png"></a>
            <div class="nav-links" id="nav_links">
                <button class="btn1" onclick="hideMenu()" style="background-color: transparent; border: 0px;"><i class="fa fa-close"></i></button>
                <ul>
                    <li><a href="../php/homepage.php">HOME</a></li>
                    <li><a href="../html/Team.html">ABOUT</a></li>
                    <li><a href="../php/ProductList.php">SHOP</a></li>
                    <li><a href="../html/feedback.html">HELP</a></li>
                    <li><a href="../php/dashboard.php">ACCOUNT</a></li>
                </ul>
            </div>
            <button class="btn1" onclick="showMenu()" style="background-color: transparent; border: 0px;"><i class="fa fa-bars"></i></button>
        </nav>

        <div class="text-box">
            <h1><?php echo "Welcome " . $_SESSION["name"] . "!"?></h1>

            <p>Your one stop shop for connecting buyers and seller, <br>all over the globe!</p>
            <a href="" class="hero-btn">Visit Us to know more!</a>
        </div>    

    </section>

    
    <!-- body -->
    <section class="course">
  <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    
        <div class="row">
            <div class="course-col">
                <a style="text-decoration: none; color: rgb(116, 113, 113);"  href="../php/ProductList.php"><h3>Visit Our Products</h3></a><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quaerat dignissimos, voluptatem eius a, rerum nostrum neque mollitia explicabo voluptatibus autem expedita obcaecati inventore! Numquam cupiditate qui voluptatibus distinctio consequatur!</p>
            </div>
            <div class="course-col">
              <a  style="text-decoration: none; color: rgb(116, 113, 113);" href="../php/postAdMain.php"><h3>Post an Ad</h3></a><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quaerat dignissimos, voluptatem eius a, rerum nostrum neque mollitia explicabo voluptatibus autem expedita obcaecati inventore! Numquam cupiditate qui voluptatibus distinctio consequatur!</p>
            </div>
            <div class="course-col">
              <a style="text-decoration: none; color: rgb(116, 113, 113);"  href="../html/Register.html"><h3>Create an Account</h3></a><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quaerat dignissimos, voluptatem eius a, rerum nostrum neque mollitia explicabo voluptatibus autem expedita obcaecati inventore! Numquam cupiditate qui voluptatibus distinctio consequatur!</p>
        </div>
    </div>
    
</section>

 <!--Footer-->
 <footer style="margin-top: 300px">
    <div class="footer">
      <div class="footer-content">
        <div class="footer-section about">
          <div class="img-footer">
            <img src="../images/logo_png.png" style="width: 100px;">
          </div>
          <br />
          <hr />
          <div class ="contact">
            <span><i class="fas fa-map-pin"></i>&nbsp;   199, La Catalogue, Wakanda, Outerspace.</span>
            <span><i class="fas fa-envelope"></i>&nbsp; la Catalogue@Wakanda.com</span>
            <span><i class="fas fa-phone"></i>&nbsp;  +94 71 2456786</span>
          </div>
        </div>
        <div class="footer-section links">
          <h2>Main Menu</h2>
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">SHOP</a></li>
            <li><a href="#">HELP</a></li>
          </ul>
        </div>
        <div class="footer-section team-sec">
          <h2>Discover</h2>
          <ul>
            <li><a href="html\Contact.html">TEAM</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        &copy; 2021 La Catalogue, All rights reserved.
      </div>
    </div>
  </footer>
</body>
</html>