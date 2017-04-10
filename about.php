<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
            <div class="col-12 about">
                <img id="slider" src="images/slider.jpg">
                <h2 class="content-h2" id="about">About Me</h2>
                <div class="about-text">
                    <p>Mijn naam is Youssef Kasem en ik ben een 25 jaar oude beginnende programmeur.</p>

                    Ik ben begonnen met een opleiding in ICT Medewerker Beheer in 2011 en ronde mijn opleiding af in 2013.<br>
                    Tijdens de opleiding had ik veel kennis opgedaan rondom ICT en de werkwijze van voornamelijk bedrijven en organisaties.<br>
                    Kennis die overigens nog steeds van pas komt in mijn huidige opleiding; Applicatie- en Mediaontwikkeling.
                    <p></p>
                    In de jaren na mijn opleiding heb ik een paar banen gehad, maar ik voelde persoonlijk niet dat ik tevreden was.<br> 
                    Alhoewel ik het wel leuk vond om PCs en servers te installeren, voelde ik me niet vervuld.
                    <p></p>
                    Na het doorzoeken over wat ik graag zou willen doen, had ik 2 jaar na mijn opleiding besloten om terug naar school te gaan om de opleiding Applicatie en Mediaontwikkeling te volgen.<br>
                    Dit besluit gaf mij een goed gevoel aangezien ik meer pret heb in het volgen van deze opleiding in 1 jaar dan ik had toen ik ICT Beheer Medewerker deed.
                    <p></p>
                    Alhoewel ik nog een beginner ben wanneer het aankomt op programmeren, hoop ik dat ik in de toekomst genoeg ervaring opdoe om mijzelf een ware programmeur te kunnen benoemen en mensen kan helpen met mijn ervaringen.<br>
                    Ik hoop dat dit u een goed beeld geeft over wie ik ben en wat mijn doelen zijn.
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
