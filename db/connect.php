<?php
$servername = "classroom.cs.unc.edu";
$username = "kjmoon";
$password = "tGmuBw7GZG7dTN67";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>

