<?php
include_once 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haryoka</title>
    <link rel="stylesheet" href="scssweb/main.css<?php preventScriptStyleCache() ?>">
    <link rel="stylesheet" href="scssweb/mainhk.css<?php preventScriptStyleCache() ?>">
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
                            <li id="selectedpage"><a href="#" data-after="Home">Home</a></li>
                            <li><a href="about-us.php" data-after="About">About&nbsp;Us</a></li>
                            <li><a href="technologies.php" data-after="Technologies">Technologies</a></li>
                            <li><a href="sustainability.php" data-after="Sustainability">Sustainability</a></li>
                            <li><a href="blogs.php" data-after="Blogs">Blogs</a></li>
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
                            science of sustainability <sup>TM</sup>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="intro-content">
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
    
    <?php
    include_once 'inc/footer-contact.php';
    ?>

    <script src="jsweb/app.js" type="text/javascript"></script>
</body>

</html>