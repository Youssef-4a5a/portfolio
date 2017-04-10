<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);
?>
<?php
require("connect.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/color/jquery.color-2.1.2.js"></script>
    <title>Wedstrijd</title>
    <style>
        #start {
            position: absolute;
            left: 50%;
            top: 50%;
        }
        
        #timer {
            position: absolute;
            left: 50%;
            top: 50%; 
        }
        
        #user {
            font-size: 1vw;
            position: absolute;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="user"><?php echo $_SESSION['username']; ?> HAS ENTERED THE GAME</div>
    <div id="timer"></div>
    <button id="start" onclick="startTimer(), maakSom()">START</button>
    <div id="userStart">User: <?php echo $_SESSION['username']; ?></div>
    <div id="punten"></div>
    <p></p>
    <table id="game">
        <tr>
            <td><div id="som1"></div></td>
            <td><div id="operator">?</div></td>
            <td><div id="som2"></div></td>
            <td><div id="equals">=</div></td>
            <td><div id="answer"></div></td>
        </tr>
    </table>
    
    <br>
    <table id="buttons">
        <tr>
            <td><button id="plus" onclick="calculate('+');">+</button></td>
            <td><button id="minus" onclick="calculate('-');">-</button></td>
            <td><button id="divide" onclick="calculate('/');">/</button></td>
            <td><button id="times" onclick="calculate('x');">x</button></td>
        </tr>
    </table>
    

    
    
    <script>
        //genereer een random getal tussen 1 en 4
        var punten = 0;
        var teken;
        function maakSom(){
        teken = Math.floor(Math.random() * 4) + 1;
        switch (teken) {
            case 1 : tekenWaarde = "+"; break;
            case 2 : tekenWaarde = "-"; break;
            case 3 : tekenWaarde = "/"; break;
            case 4 : tekenWaarde = "x"; break;
        }
        
        //Som
        var som1 = Math.floor(Math.random() * 21);
        var som2 = Math.floor(Math.random() * 21);
        var answer;
        
        switch (teken) {
            case 1 : answer = som1+som2;break;
            case 2 : answer = som1-som2;break;
            case 3 : answer = som1/som2;break;
            case 4 : answer = som1*som2;break;
        }
        

        document.getElementById("punten").innerHTML = punten;

            
            document.getElementById("som1").innerHTML = som1;
            document.getElementById("som2").innerHTML = som2;
            document.getElementById("answer").innerHTML = answer;
        }
        
        
        function calculate(knop){
            if(knop == tekenWaarde) {
                punten++;
                maakSom();
            } else {
                punten--;
                maakSom();
            }
        }

        
        //Timer
        var counter;
        var count;
        
        function startTimer() {
            count = 30;
            counter = setInterval(timer, 1000);
        }
        
        function timer(){
            count=count-1;
            if (count <= 0){
                clearInterval(counter);
                $(document).ready(function(){
                    $("#timer").hide();
                    $("#start").show();
                })
                return;
            }
            document.getElementById("timer").innerHTML = count + " seconds left!";
        }
        
        //Jquery misc
        $(document).ready(function(){
            $("#timer").hide();
            $("#game").hide();
            $("#buttons").hide();
            $("#userStart").hide();
            $("#punten").hide();
            
            $("#start").click(function(){
                $("#start").hide();
                $("#timer").show();
                $("#game").show();
                $("#buttons").show();
                $("#userStart").show();
                $("#punten").show();
                $("#user").hide();
            })
            
            $("#plus").click(function(){
                $("#calculate").html("+");
            });
            $("#minus").click(function(){
                $("#calculate").html("-");
            });
            $("#times").click(function(){
                $("#calculate").html("x");
            });
            $("#divide").click(function(){
                $("#calculate").html("/");
            });
        });
    </script>
</body>
</html>