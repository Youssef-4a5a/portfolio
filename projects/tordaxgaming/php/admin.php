<?php 
    $servername = "localhost";
    $username = 'root';
    $password = "";
    $database = "tordax";
    $bla = $_SESSION["userID"];
    // $bla = "pizza";
    
    $conn = new PDO("mysql:host=$servername; dbname=$database",$username,$password);
    $select = "SELECT admin FROM login WHERE user='".$bla."'";

    $result = $conn->query($select);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        foreach($result as $row) {
            if($row["admin"]==1){
                echo "<li><a href=login.php>login</a></li>
                <li><a href=edit.php>edit</a></li>";
            }
        }
    }
?>