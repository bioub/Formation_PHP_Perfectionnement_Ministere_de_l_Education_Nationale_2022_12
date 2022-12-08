<?php
session_start();
$token = uniqid();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_SESSION['CSRF_TOKEN'] !== $_POST['CSRF_TOKEN']) {
        exit('mismatch token');
    }


    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
    $db_user = 'root';
    $db_password = '';

    try {
        $pdo = new PDO($dsn, $db_user, $db_password);
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email, 'password' => $password]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "User created";
    }
    catch (PDOException $e) {
        echo $e->getMessage() . "\n";
    }
} else {
    $_SESSION['CSRF_TOKEN'] = $token;
}
?>
<form method="post">
    <input type="hidden" name="CSRF_TOKEN" value="<?=$token?>" />
    <p>
        Email : <input name="email" value="<?=$_POST['email'] ?? ''?>" />
    </p>
    <p>
        Password : <input name="password" value="<?=$_POST['password'] ?? ''?>" />
    </p>
    <p>
        <button>Login</button>
    </p>
</form>
