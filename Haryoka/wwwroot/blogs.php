﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haryoka</title>
    <link rel="stylesheet" href="scssweb/main.css">
    <link rel="stylesheet" href="scssweb/mainhk.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="./jsweb/jquery-3.6.0.slim.min.js"></script>
</head>

<body>
    <section id="header">
        <div class="header">
            <div class="container">
                <div class="nav-bar">
                    <div class="brand">
                        <a href="home.html">
                            <img src="pics/hms-logo.png">
                        </a>
                    </div>

                    <div class="nav-list">
                        <div class="hamburger">
                            <div class="bar"></div>
                        </div>

                        <ul class="nav-item">
                            <li><a href="index.html" data-after="Home">Home</a></li>
                            <li><a href="about-us.html" data-after="About">About Us</a></li>
                            <li><a href="technologies.html" data-after="Technologies">Technologies</a></li>
                            <li><a href="sustainability.html" data-after="Sustainability">Sustainability</a></li>
                            <li id="selectedpage"><a href="#" data-after="Blogs">Blogs</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="home">
        <div class=" container">
            <div class="hero">
                <div class="centerhk">
                    <h1>
                        We use the power of chemistry respon­sibly to produce molecules and materials that improve life sustainably
                    </h1>
                    <div class="button-wrapper">
                        <h2>
                            haryoka molecular sciences
                        </h2>
                    </div>
                    <div class="button-wrapper">
                        <h3>
                            Science of Sustainability <sup>TM</sup>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main>
        <section class="intro-content" id="about">
            <div class="container">
                <div class="intro w100">
                    <div class="left">
                        <h1>Product Vision</h1>
                        <p>
                            <ul style="font-size:12pt;">
                                <li>Sustainable additives for high volume chemicals – Static dissipation, surfactants etc.</li>
                                <li>Atom efficiency – For both manufacturing and end use.</li>
                                <li>Sustainable chemistry for existing non-biodegradable materials – To make non-biodegradable common plastics biodegradable.</li>
                                <li>Going beyond carbon credits – Creating new value-added products while completing the carbon cycle to reach our goal of zero-emission in an economic way.</li>
                            </ul>
                        </p>
                        <div style="display: none" class="btn-wrapper">
                            <button class="btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <footer>
        <section class="contact" id="sustainability">

            <div class="container contact-details">
                <div class="support">
                    <div class="support-steeper">
                        <div class="item">
                            <img src="pics/phone-icon.png">
                            <div class="txt">0000000000</div>
                        </div>
                        <div class="item">
                            <img src="pics/mail-icon.png ">
                            <div class="txt">info@haryoka.com</div>
                        </div>
                        <div class="item">
                            <img src="pics/location-icon.png ">
                            <div class="txt">
                                Haryoka Molecular Sciences
                            </div>
                            <span>LIne 1,</span>
                            <span>Singapore 7677,</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-bg w100">
            <div class="footer-content">
                <div class="footer-list w100">
                    <ul>
                        <li><a href="index.html" data-after="Home">Home</a></li>
                        <li><a href="about-us.html" data-after="About">About Us</a></li>
                        <li><a href="technologies.html" data-after="Technologies">Technologies</a></li>
                        <li><a href="sustainability.html" data-after="Sustainability">Sustainability</a></li>
                        <li><a href="#" data-after="Blogs">Blogs</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>
                        Copyright ©
                        <script>document.write(new Date().getFullYear());</script> www.haryoka.com All Rights Reserved.
                    </p>
                </div>
            </div>

        </section>
    </footer>

    <script src="jsweb/app.js" type="text/javascript"></script>
</body>

</html>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>