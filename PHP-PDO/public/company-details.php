<?php
// pour démarrer rapidement un serveur web :
// php -S localhost:8080 -t public
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
$user = 'root';
$password = ''; // par défaut XAMPP '', WAMPP 'root'

$id = (int) $_GET['id'] ?? '';

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SELECT name, city FROM companies WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    $company = $stmt->fetch(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    echo $e->getMessage() . "\n";
}
?>
<p>Company : <?=$company['name']?></p>
<p>City : <?=$company['city']?></p>
