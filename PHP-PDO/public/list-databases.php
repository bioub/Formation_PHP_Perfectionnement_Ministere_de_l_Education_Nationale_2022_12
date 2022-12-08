<?php
// pour démarrer rapidement un serveur web :
// php -S localhost:8080 -t public
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8';
$user = 'root';
$password = ''; // par défaut XAMPP '', WAMPP 'root'

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SHOW DATABASES;";

    $stmt = $pdo->query($sql);
    $databases = $stmt->fetchAll(PDO::FETCH_COLUMN);

    var_dump($databases);
}
catch (PDOException $e) {
    echo $e->getMessage() . "\n";
}