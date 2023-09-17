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
                            <li id="selectedpage"><a href="#" data-after="Technologies">Technologies</a></li>
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
                <div class="centerhk" style="display: none;">
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
        <section class="intro-content">
            <div class="container">
                <div class="intro xw100">
                    <div class="lefttechnology">
                        <h1>Where haryoka can make a difference right now</h1>
                        <br />
                        <div class="divtile">
                            <div><img src="pics/techno1.png"></div>
                            <div>1</div>
                            <div>
                                Monomers that make existing polymers biodegradable and recyclable
                            </div>
                        </div>
                        <div class="divtile">
                            <div><img src="pics/techno2.png"></div>
                            <div>2</div>
                            <div>
                                Sustainable fluoropolymers and alternatives
                            </div>
                        </div>
                        <div class="divtile">
                            <div><img src="pics/techno3.png"></div>
                            <div>3</div>
                            <div>
                                Bio-degradable and functional chemicals and materials from CO2
                            </div>
                        </div>
                        <div style="clear: both;"></div>

                        <div class="divsub">
                            <table class="table">
                                <tr>
                                    <td style="text-align: center; vertical-align: top; width:30%;">
                                        <div><img src="pics/techno1.png"></div>
                                    </td>
                                    <td rowspan="2" style="text-align: left; vertical-align: top;">
                                        <p>We own proprietary technology for the large-scale synthesis of cyclic ketene acetal monomers that enable the production of a biodegradable version of existing plastics and care chemicals.</p>
                                        <br />
                                        <p>Using these monomers and our advanced polymer reaction engineering approach, we can solve your non-biodegradability problems in existing polymers.</p>
                                        <br />
                                        <p>We develop our monomers from natural resources in a carbon-neutral way for the sustainability of our planet.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: top;">
                                        methods to make existing polymers biodegradable and recyclable
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="clear: both;"></div>

                        <div class="divsub">
                            <table class="table">
                                <tr>
                                    <td style="text-align: center; vertical-align: top; width:30%;">
                                        <div><img src="pics/techno3.png"></div>
                                    </td>
                                    <td rowspan="2" style="text-align: left; vertical-align: top;">
                                        haryoka’s proprietary technology is creating next-generation industrial chemicals straight from carbon dioxide and bioderived small molecules without high temperature and pressure. This technology platform enables our industrial partners to earn carbon credits and contribute to sustainability while generating revenue through carbon capture. Currently we are optimizing the following technologies to scale to offer to industry:
                                        <br /><br />
                                        <ul>
                                            <li>
                                                next-generation industrial solvents 
                                            </li>
                                            <li>
                                                next-generation monomers
                                            </li>
                                            <li>
                                                biodegradable polymers with high performance
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: top;">
                                        biodegradable and functional chemicals and materials from CO<sub>2</sub>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="clear: both;"></div>
        </section>
        <div style="clear: both;"></div>
        <?php
        include_once 'inc/footer-contact.php';
        ?>
    </main>

    <script src="jsweb/app.js"></script>
</body>

</html>