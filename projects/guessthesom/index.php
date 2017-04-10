<?php session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #form {
            position: absolute;
            width: 100%;
            top: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST["site"]) == "oefening"){
        $_SESSION['username'] = $_POST["username"];
        header("Location: oefening.php");
        exit;
    } else if(isset($_POST["site"]) == "wedstrijd"){
        header("Location: wedstrijd.php");
        exit;
    }
        
      //all kevin  
    ?>
    <form id="form" method="post">
        Username: <input type="text" name="username">
        <br>
        <br>
        Welke website?
        <br>Oefening<input type="radio" name="site" value="oefening">
        <br>Wedstrijd<input type="radio" name="site" value="wedstrijd">
        <br>
        <input type="submit" name="submit">
    </form>
    <br>
</body>
</html>