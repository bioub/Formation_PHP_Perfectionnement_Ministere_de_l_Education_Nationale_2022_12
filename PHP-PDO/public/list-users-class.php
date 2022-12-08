<?php
// pour démarrer rapidement un serveur web :
// php -S localhost:8080 -t public
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
$user = 'root';
$password = ''; // par défaut XAMPP '', WAMPP 'root'

class User {
    protected string $first_name;
    protected string $last_name;
}

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SELECT first_name, last_name FROM users";

    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_CLASS, User::class);

    var_dump($users);
}
catch (PDOException $e) {
    echo $e->getMessage() . "\n";
}