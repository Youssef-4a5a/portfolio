<?php session_start(); ?>
<head>
        <title>TordaxGaming</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" media="screen and (min-width:641px)">
        <link rel="stylesheet" href="mobile.css" media="screen and (max-width:640px)">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="script.js"></script>
        <script src="https://apis.google.com/js/platform.js"></script>
    </head>
    <body>
        <?php include('php/nav.php'); ?>
    
        <div class="nav"><br>
            <img src=images/logo.png id=bannerlogo>
            <ul>
                <li id=index><a href="index.php">Tordax Gaming</a></li>
                <li id=aboutme><a href="aboutme.php">About me</a></li>
                <li id= stream><a href="stream.php">Streams</a></li>
                <?php include("php/admin.php"); ?>
            </ul>
            <div id=border></div>
        </div>
        
        <div class=banner>
            <div id="banner"></div>
            <div id=border2></div>
        </div>