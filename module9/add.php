<?php 


include_once ('config.php');


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Insert into users (name, email, password) values (:name, :email, :password)";
    $sqlQuery = $pdo->prepare($sql);




    $sqlQuery->bindParam(":name", $name);
    $sqlQuery->bindParam(":email", $email);
    $sqlQuery->bindParam(":password", $password);

    
    $sqlQuery->execute();

    echo "Data aved successfully";
}



?>