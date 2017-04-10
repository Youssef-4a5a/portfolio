<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Youssef Kasem - Portfolio</title>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script type="text/javascript" src="scripting.js"></script>
    </head>
    <header class="thetop">
        <img id="header_logo" src="images/logo.jpg">
        <button class="topcontact_button">Contact methoden</button>
        <div class="topcontact">
            <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Ykasem@y-kasem.nl
        </div>
        <div id="topmenu">
            <div class="hamburger_topmenu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <a href="about.php">About me</a>
            <a href="projects.php">Projecten</a>
        </div>
        <ul id="hamburger_list">
            <a href="about.php"><li>About me</li></a>
            <a href="projects.php" id="hamburger_projectList-show">
                <li>
                    Projecten
                </li>
                <ul id="hamburger_projectList">
                    <a href="projects/BKE/BKE.html" target="_blank"><li>BKE</li></a>
                    <a href="projects/tordaxgaming/index.php" target="_blank"><li>TordaxGaming</li></a>
                    <a href="projects/guessthesom/index.php" target="_blank"><li>Guess the Som</li></a>
                    <a href="projects/rekenmachine/Rekenmachine.html" target="_blank"><li>Rekenmachine</li></a>
                </ul>
            </a>
        </ul>

    </header>
    <body>
        <div class='scrolltop'>
            <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
        </div>
        <div class="row">
            <div class="col-12 projects">
                <h2 class="content-h2" id="projects">Projects</h2>
                <div class="projects-text">
                    Hieronder vindt u enige projecten die ik sinds het begin van mijn studie succesvol heb weten af te ronden. 
                    <br>
                    Bekijk ze gerust door op de desbetreffende afbeeldingen te klikken!
                </div>

                <div class="col-6 left projects">
                    <a href="projects/BKE/BKE.html" target="_blank">
                        <img src="images/project1.jpg">
                    </a>
                </div>
                <div class="col-6 right projects">
                    <a href="projects/tordaxgaming/index.php" target="_blank">
                        <img src="images/project2.jpg">
                    </a>
                </div>
                <div class="col-6 left projects">
                    <a href="projects/guessthesom/index.php" target="_blank">
                        <img src="images/project3.jpg">
                    </a>
                </div>
                <div class="col-6 right projects">
                    <a href="projects/rekenmachine/Rekenmachine.html" target="_blank">
                        <img src="images/project4.jpg">
                    </a>
                </div>
            </div>
            <div class="col-12 content-contact">
                <div class="col-7">
                    <h2 class="content-h2" id="contact">Contact</h2>
                    <div class="contact-text">
                        In het formulier kunt u een bericht versturen met uw contact gegevens voor enige vragen ontremd mijzelf of mijn portfolio. Ik zal dan z.s.m contact op nemen.
                    </div>
                </div>
                <div class="col-5">
                    <?php
                    if (isset($_POST['submit'])) {
                        $to = "youssef1990@gmail.com";
                        $from = $_POST['mail'];
                        $subject = $_POST['subject'];
                        $name = $_POST['name'];
                        $message = $name . " heeft het volgende bericht naar u toegestuurd:" . "\n\n" . $_POST['message'];
                        $message2 = "Hierbij ontvangt u een kopie van uw verstuurde bericht, " . $name . "\n\n" . $_POST['message'];

                        $headers = "Van:" . $from;
                        $headers2 = "Van:" . $to;
                        mail($to, $subject, $message, $headers);
                        mail($from, $subject2, $message2, $headers2);
                        echo "E-mail is verstuurd. Bedankt " . $name . ", ik zal z.s.m contact met u proberen op te nemen.";
                    }
                    ?>
                    <form action="" method="POST">
                        <input type="text" name="subject" placeholder="Titel" required>
                        <br>
                        <input type="text" name="name" placeholder="Naam" required>
                        <br>
                        <input type="email" name="mail" placeholder="E-mail" required>
                        <br>
                        <textarea name="message" placeholder="Uw bericht" required></textarea>
                        <br>
                        <input type="submit" value="Verstuur bericht">
                        <br>
                    </form>
                </div>
            </div>
            <footer>
                <div class="col-12 footertop">
                    <h2>Navigatie</h2>
                    <div class="col-6">
                        <h3>About me</h3>
                        <ul>
                            <a href="about.php#about"><li>About me</li></a>
                            <a href="about.php#contact"><li>Contact</li></a>
                        </ul>
                    </div>
                    <div class="col-6 right">
                        <h3>Projecten</h3>
                        <ul>
                            <a href="projects.php#projects"><li>About Projects</li></a>
                            <a href="projects/BKE/BKE.html" target="_blank"><li>BKE</li></a>
                            <a href="projects/tordaxgaming/index.php" target="_blank"><li>TordaxGaming</li></a>
                            <a href="projects/guessthesom/index.php" target="_blank"><li>Guess the Som</li></a>
                            <a href="projects/rekenmachine/Rekenmachine.html" target="_blank"><li>Rekenmachine</li></a>
                            <a href="projects.php#contact"><li>Contact</li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-12 footerbottom">
                    <div class="footerbottom center">
                        <img src="images/logo.jpg">
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        $("#hamburger_list").hide();
        $(".hamburger_topmenu").click(function () {
            $("#hamburger_list").slideToggle();
        });

        $("#hamburger_projectList").hide();
        $("#hamburger_projectList-show").click(function () {
            if ($("#hamburger_projectList").is(':hidden') == true) {
                $("#hamburger_projectList").slideToggle();
                return false;
            }
        });

        $(".topcontact_button").click(function () {
            $(this).slideUp('slow', function () {
                $(".topcontact").css("display", "block");
            });
        });
    </script>
</html>
