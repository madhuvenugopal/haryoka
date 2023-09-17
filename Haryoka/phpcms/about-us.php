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
                            <li id="selectedpage"><a href="#" data-after="About">About&nbsp;Us</a></li>
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
                    <div class="leftaboutus">
                        <h1>hari-ōka (green-home in Sanskrit) is The Chemical Company for the future.</h1>
                        <p>
Chemistry plays an indispensable role in shaping industries, fueling technological advancements, and improving various aspects of our lives, but if we do not do it right, it can have disastrous consequences. 
<br /><br />
At haryoka, we create green and sustainable chemistry, free from the environmental problems that indiscriminate use of chemical technology has created over the past century. We offer superior, sustainable chemicals through eco-friendly manufacturing processes and technologies.
<br /><br />
Our goal is to develop next-generation chemical technology where circularity of products and processes will bring back the verdure and vibrancy our planet has lost, all without compromising on human comfort and economic viability.

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