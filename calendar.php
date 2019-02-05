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
                <li class="onfocus"><a href="calendar.php">Calendar</a></li>
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
            <div class="calendar">
                <h2>Calendar of Events</h2>
                <iframe class="google-calendar" src="https://calendar.google.com/calendar/b/3/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=mr6kdbhk8hcpkkcei4q3a3l6q8%40group.calendar.google.com&amp;color=%23060D5E&amp;ctz=America%2FNew_York" frameborder="0" scrolling="no"></iframe>
                <iframe class="mobile-calendar" src="https://calendar.google.com/calendar/b/3/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=mr6kdbhk8hcpkkcei4q3a3l6q8%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style="border-width:0"  height="600" frameborder="0" scrolling="no"></iframe>
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