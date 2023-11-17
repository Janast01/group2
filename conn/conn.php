<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "passmanager_db";

try {
    $conn = new PDO("mysql:host=$servername, $username, $password, $db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

?>