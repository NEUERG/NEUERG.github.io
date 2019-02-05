<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113940746-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-113940746-1');
        </script>-->
        <meta charset="utf-8">
        <title>Big Data NU</title>
        <!-- Load Roboto font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700,700i" rel="stylesheet">
        <!-- Load css styles -->
        <style>
        <?php include('css/style.css');?>
        </style>
        <!-- Favicon -->
        <link rel='shortcut icon' type='image/x-icon' href='img/favicon.png'>

    </head>
    
    
    <body>
        <nav>
            <div class="nav-container">
            <div class="logo">
                <a href="index.php">
                <img src="img/logo.jpg">
                </a>
            </div>
                <div class="buffer"></div>
            <ul>
                <li class="menu-item" ><a href="index.php">Home</a></li>
                <li class="menu-item"><a href="ourteam.php">Our Team</a></li>
                <li class="menu-item"><a href="programs.php">Programs</a></li>
                <li class="menu-item"><a href="calendar.php">Calendar</a></li>
                <li class="onfocus"><a href="resources.php">Resources</a></li>
            </ul>
            </div>
        </nav>
        <div class="banner">
            <div class="banner-container">
                <div class="left-text">
                    <h1>Join Us Tuesdays</h1>
                </div>
                <div class="right-text">
                    <p>158 Ryder Hall</p>
                    <p>7:00 - 8:00 PM</p>
                </div>
            </div>
        </div>
        <content>
            <div class="resources">
                <h2>Big Data Public Google Drive</h2>
                <iframe  class="google-drive" src="https://drive.google.com/embeddedfolderview?id=1_fYgMrE_roBp184h6Agh7dHZ86r4WtVU#list"></iframe>
            </div>
        </content>
        <div class="footer">
            <div class="wrapper-footer">
                <div class="left-footer">
                    <p>© Big Data NU 2018</p>
                </div>
                <div class="right-footer">
                    <div class="img-wrapper-footer">
                        <a href="https://www.facebook.com/BigData.NU/" target="_blank"><img src="img/social/facebook.png"></a>
                        <a href="https://github.com/NEUERG" target="_blank"><img src="img/social/github.png"></a>
                        <a href="mailto:bigdata.nu@gmail.com" target="_blank"><img src="img/social/gmail.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </body>