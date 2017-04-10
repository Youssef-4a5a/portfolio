<?php
require("connect.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $sql = "select * from Scores
            order by Score DESC
            limit 5";
            
    foreach($sql as $scores){
        echo "<table><tr><td></td><td></td></tr></table>";
    }
    
    
    $conn = null;
    ?>
</body>
</html>