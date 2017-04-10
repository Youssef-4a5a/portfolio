<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <?php include('html/navigate.php');?>
    
    <center>
        <div id=login>
            <form method=post class=login action="php/login.php">
                login<br>
                <input type=text name=username><br>
                password<br>
                <input type=password name=password><br><br>
                <input type=submit value=submit>
            </form>
        </div>
    </center>
    <footer class=footer>
        <!--    <li><p class="g-ytsubscribe" data-channelid="UCe8hBBYC57v0iaizqG-eadg" data-layout="default" data-count="hidden"></p></li>-->
        
        <ul>
            <li><a href="#"><img src="images/patreon.png" class=logo></img></a></li>
            <li><a href="#"><img src="images/youtube.png" class=logo></img></a></li>
            <li><a href="#"><img src="images/twitch.png" class=logo></img></a></li>
            <li><a href="#"><img src="images/google.png" class=logo></img></a></li>
        </ul>

    </footer>
        
        <script>
            
        </script>
    </body>
</html>