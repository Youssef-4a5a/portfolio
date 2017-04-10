<?php 
    $servername = "localhost";
    $username = 'root';
    $password = "";
    $database = "tordax";
    
    $conn = new PDO("mysql:host=$servername; dbname=$database",$username,$password);
    $select = "select id, head,content from message";
    $result = $conn->query($select);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        foreach($result as $row){
        echo'<div class="content">
                <div class="title">'. $row['head'] .'</div>
                <div class="box" id='.$row["id"].'>'. $row['content'] .'</div>
                <div class="readmore">readmore</div>
            </div>
            ';
        }
    }