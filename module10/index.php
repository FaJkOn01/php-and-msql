<?php
require "config.php";

$sql = "SELECT * FROM users";
$query = $conn->prepare($sql);
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{font-family: Arial, sans-serif; margin:40};
        table{border-collapse: collapse; width: 100%;max-width: 650px}
        th, td {border: 1px solid #aaa; padding: 8px; text-align: left;}
        th {background-color: #eee;}

    </style>
    
</head>
<body>
    <h1>Users</h1>
    <p>this page reads users from the MySQL database and displays them in a table</p>

    <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
            </tr>

            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars((string)$user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['surname']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                </tr>
            <?php endforeach; ?>

    </table>

    <?php if(empty($users)): ?>
        <p>No users found</p>
    <?php endif; ?>
</body>
</html>