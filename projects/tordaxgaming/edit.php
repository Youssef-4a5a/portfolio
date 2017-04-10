<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <?php include('html/navigate.php');?>
    
    <div class=edit>
        <?php
            $servername = "localhost";
            $username = 'emielsuurling';
            $password = "";
            $database = "tordax";
            $bla = $_SESSION["userID"];
            // $bla = "pizza";
            
            $conn = new PDO("mysql:host=$servername; dbname=$database",$username,$password);
            $select = "SELECT admin FROM login WHERE user='".$bla."'";
        
            $result = $conn->query($select);
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{
                foreach($result as $row) {
                    if($row["admin"]==1){
                        include("php/editor.php");
                    }
                    else{
                        header("refresh:0; url=index.php");
                    }
                }
            }
        ?>
    </div>    
    <?php include("html/footer.php")?>
    
    <script>
        $(document).ready(function(){
            function loop(){
                $("#animate").animate({"left":"+=99%"},4000);
                $("#animate").animate({"left":"-=99%"},4000);
            };
            var animate = setInterval(function(){loop()},0);
        });
        
        $(document).ready(function(){
            function loop(){
                $("#animate2").animate({"right":"+=99%"},4000);
                $("#animate2").animate({"right":"-=99%"},4000);
            };
            var animate = setInterval(function(){loop()},0);
        });
       
    </script>
    
    </body>
</html>