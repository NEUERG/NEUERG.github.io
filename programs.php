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
                <li class="onfocus"><a href="programs.php">Programs</a></li>
                <li class="menu-item"><a href="calendar.php">Calendar</a></li>
                <li class="menu-item"><a href="resources.php">Resources</a></li>
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
        <div class="information programs">
            <hr>
            <div class="about">
                <div class="about-text workshops">
                    <h2>Workshops</h2>
                    <p>Our Data Workshops are designed to engage members with new and interesting idea in the field of data analytics. The Workshops help to progress data projects that members create and execute through open collaboration, discussion, and advising. </p>
                    <p>Any member that wishes to contribute to the discussion has the ability to do so. If you have a data project idea and would like to present feel free to notify us via <a href="mailto:bigdata.nu@gmail.com" target="_blank">email</a> or <a href="https://www.facebook.com/bigdata.nu" target="_blank">facebook</a> so that we may set aside time during the workshop for you.</p>
                </div>
                <div class="about-img">
                    <img src="img/programs1.jpg">
                </div>
            </div>
            <hr>
            <div class="about">
                <div class="about-img">
                    <img src="img/programs2.jpg">
                </div>
                <div class="about-text speakers">
                    <h2>Speaker Events</h2>
                    <p>Speaker events bring in industry professionals to talk about their research or work in the field. These presentations help to promote an interest in the field of Big Data, help students network within the industry, and foster ideas among our members for the application of data projects of their own.</p>
                    <p>Speakers are generally scattered throughout the semester to try and bring a wide range of expertise to our membership. If you are or know of an industry professional that would be willing to come in and share their expertise we are always looking for more opportunities.</p>
                </div> 
            </div>
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