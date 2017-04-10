<?php session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
    <?php include('html/navigate.php');?>
    
    <div id=content>
        <?php include('php/message.php');
        ?>
    </div>
	
	<div class="sidebar">
	    <div class="trailer">
	        <iframe width="100%" height="100%"
            src="https://www.youtube.com/embed/L8hf4t9YT48?autoplay=0">
            </iframe>
	    </div>
    	<div class="twatter">
	        <a class="twitter-timeline" data-widget-id="697764990036668416" href="https://twitter.com/TordaxGaming">Tweets by @TordaxGaming</a>
        </div>
	</div>
    
    </body>
    
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
        // twitter
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
            
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src=p+"://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }
        (document,"script","twitter-wjs");

        function readmore1(){
            $("#1").addClass("focus");
            $("#2").addClass("hidden");
            $("#3").addClass("hidden");
        }
    </script>
</html>

