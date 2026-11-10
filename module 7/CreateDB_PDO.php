<?php
$host = 'localhost';
$user = 'root';
$password = '';

try {
     $conn = new PDO("mysql:host=$host", $user, $password);
     $sql = "Create Database testdb";
     $conn->exec($sql);
     echo "Database created successfully";
} catch (PDOException $e) {
    echo "Database not created, smth went wrong ";
}

?>