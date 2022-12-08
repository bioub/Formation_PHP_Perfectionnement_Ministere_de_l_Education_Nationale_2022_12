<?php
// pour démarrer rapidement un serveur web :
// php -S localhost:8080 -t public
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
$user = 'root';
$password = ''; // par défaut XAMPP '', WAMPP 'root'

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SELECT email FROM users";

    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    echo $e->getMessage() . "\n";
}
?>
<ul>
    <?php foreach ($users as $user) : ?>
    <li><?=htmlspecialchars($user['email'])?></li>
    <?php endforeach; ?>
</ul>
