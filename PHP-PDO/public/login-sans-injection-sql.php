<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $dsn = 'mysql:host=localhost;port=3306;charset=UTF8;dbname=address_book';
    $db_user = 'root';
    $db_password = '';

    try {
        $pdo = new PDO($dsn, $db_user, $db_password);
//        $email = $pdo->quote($email);
//        $password = $pdo->quote($password);
        $sql = "SELECT email FROM users WHERE email = :email AND password = :password";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email, 'password' => $password]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "Connecté en tant que $user[email]";
        } else {
            echo "Mauvais login/password";
        }
    }
    catch (PDOException $e) {
        echo $e->getMessage() . "\n";
    }
}
?>
<form method="post">
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
