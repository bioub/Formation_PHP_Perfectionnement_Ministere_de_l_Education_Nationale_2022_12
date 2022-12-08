<?php
// pour démarrer rapidement un serveur web :
// php -S localhost:8080 -t public
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
$user = 'root';
$password = ''; // par défaut XAMPP '', WAMPP 'root'

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SELECT id, name FROM companies";

    $stmt = $pdo->query($sql);
}
catch (PDOException $e) {
    echo $e->getMessage() . "\n";
}
?>
<nav>
    <?php foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $company) : ?>
    <a href="company-details.php?id=<?=$company['id']?>"><?=$company['name']?></a>
    <?php endforeach; ?>
</nav>
