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
                <li class="onfocus" ><a href="index.php">Home</a></li>
                <li class="menu-item"><a href="ourteam.php">Our Team</a></li>
                <li class="menu-item"><a href="programs.php">Programs</a></li>
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
        <div class="information">
            <hr>
            <div class="about">
                <div class="about-text">
                    <h2>About Big Data Club</h2>
                    <p>The Big Data Club of Northeastern University is committed to helping students develop their knowledge and exposure to data science. The club is designed to maximize exposure to data analytics software and professional opportunities to further careers in data science.</p>
                    <p>In the Big Data Club, students have the opportunity to pursue their passion for data visualization and analysis. Working with groups or by themselves, members have the opportunity to further their understanding of data analytics and its potential applications through our speaker events and workshops. </p>
                </div>
                <div class="about-img">
                    <img src="img/data.jpg">
                </div>
            </div>
            <hr>
            <div class="upcoming-event">
                <div class="upcoming-event-content">
                    <h2>Our Next Event</h2>
                    <a target="_blank" href="https://www.facebook.com/events/2548092915210396/">
                        <div class="event-border">
                            <div class="event-info">
                                <p class="event-title">Why Data Science?</p>
                                <p class="event-time">6:00pm - 7:00pm | Feb. 5<sup>th</sup></p>
                                <p class="event-loc">ISEC 140</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            <div class="email">
                <div class="email-content">
                    <h2>Signup for our Weekly Emails</h2>
                    <!-- Begin Mailchimp Signup Form -->
                    <!--<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css"> -->
                    <div id="mc_embed_signup">
                    <form action="https://bigdatanu.us17.list-manage.com/subscribe/post?u=27386b78831cebc7385cb2e3d&amp;id=381015adfe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">

                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_27386b78831cebc7385cb2e3d_381015adfe" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
            <hr>
            <div class="events">
                <h2>Past Events</h2>
                <div class="event-list">
                    <div class="event-item">
                        <img src="img/event/cdo.jpg">
                        <p>Former Boston CDO</p>
                        <p>Andrew Therriault</p>
                    </div>
                    <div class="event-item">
                        <img src="img/event/tableau.jpg">
                        <p>Tableau</p>
                        <p>Workshop</p>
                    </div>
                    <div class="event-item">
                        <img src="img/event/eatonvance.jpg">
                        <p>Eaton Vance Earnings</p>
                        <p>Call Presentation</p>
                    </div>
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