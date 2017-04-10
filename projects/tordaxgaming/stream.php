<?php session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
    <?php include('html/navigate.php');?>
        
    <iframe id="twitchPlayer" frameborder="0" scrolling="no" src=
        "https://player.twitch.tv/?channel=tordaxgaming">
    </iframe>
        
    <?php include('html/footer.php');?>
    <script>
      
    </script>
    
    </body>
</html>