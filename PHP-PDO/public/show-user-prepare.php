<?php
// pour démarrer rapidement un serveur web :
// php -S localhost:8080 -t public
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
$user = 'root';
$password = ''; // par défaut XAMPP '', WAMPP 'root'

$id = $_GET['id'] ?? '';

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SELECT first_name, last_name FROM users WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($user);
}
catch (PDOException $e) {
    echo $e->getMessage() . "\n";
}