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
                        <a href="index.php">
                            <img src="pics/hms-logo.png">
                        </a>
                    </div>

                    <div class="nav-list">
                        <div class="hamburger">
                            <div class="bar"></div>
                        </div>

                        <ul class="nav-item">
                            <li><a href="index.php" data-after="Home">Home</a></li>
                            <li><a href="about-us.php" data-after="About">About&nbsp;Us</a></li>
                            <li><a href="technologies.php" data-after="Technologies">Technologies</a></li>
                            <li id="selectedpage"><a href="#" data-after="Sustainability">Sustainability</a></li>
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
                        <p class="div-p-box">
                        Sustainability lies at the very core of haryoka’s business philosophy. With an unwavering commitment to environmental responsibility, we take pride in placing the sustainability over profit margins. We are proud to lead the charge in creating a greener and more sustainable future for our planet with our comprehensive approach that spans across every aspect of our operations, from sourcing raw materials to the development of groundbreaking, eco-friendly technologies.
                        </p>
                        <p class="div-p-box">
                        Through continuous research and innovation, we are working towards reducing the global carbon footprint, promoting zero-waste initiatives, and optimizing resource consumption. Our dedication to sustainability is ready to extend beyond our own practices and we actively seek out collaborations with communities, educational organizations, NGOs, and industry partners to foster positive connections that will create sustainable societies and ecosystems for generations to come. 
                        </p>
                        <p class="div-p-box">
                        For haryoka sustainability is not an option; it is our responsibility to humanity and the planet and we are fully committed to making a lasting difference.
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

    <script src="jsweb/app.js"></script>
</body>

</html>