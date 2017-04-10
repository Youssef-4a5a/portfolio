<?php 
    session_start();
    $server   = "localhost";
    $username = 'root';
    $password = "";
    $database = "tordax";
    $bla      = $_POST["username"];
    
    $conn = new PDO("mysql:host=$server; dbname=$database",$username,$password);
    $select = "SELECT * FROM login WHERE user ='".$bla."'";
    $result = $conn->query($select);
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        foreach($result as $row){
            if($row["password"] === $_POST["password"]){
                $_SESSION["userID"] = $_POST["username"];
                header('refresh:0; url=https://jeffry-van-weede-emielsuurling.c9users.io/site/index.php');
                exit;
            }
            else{
                echo "<script>alert('password or username incorrect')</script>";
                header('refresh:0; url=https://jeffry-van-weede-emielsuurling.c9users.io/site/login.php');
                exit;
            }
        }
    }
?>