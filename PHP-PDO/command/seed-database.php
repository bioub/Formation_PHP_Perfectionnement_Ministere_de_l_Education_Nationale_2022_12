<?php
$dsn = 'mysql:host=localhost;port=3306;charset=UTF8';
$user = 'root';
$password = '';
$pdo = null;

try {
    $pdo = new PDO($dsn, $user, $password);

    $pdo->exec("DROP DATABASE IF EXISTS address_book");
    $pdo->exec("CREATE DATABASE address_book CHARACTER SET UTF8");
    $pdo->exec("USE address_book");
    $pdo->exec(<<<SQL
        CREATE TABLE `users` (
            `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            `first_name` VARCHAR(100) NOT NULL,
            `last_name` VARCHAR(100) NOT NULL,
            `email` VARCHAR(255)
        )
    SQL);

    $pdo->exec(<<<SQL
        CREATE TABLE `companies` (
            `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(100) NOT NULL,
            `city` VARCHAR(100) NOT NULL
        )
    SQL);

    $pdo->beginTransaction();

    $pdo->exec(<<<SQL
        INSERT INTO users (first_name, last_name, email) VALUES ('Steve', 'Jobs', 'sjobs@apple.com')
    SQL);

    $pdo->exec(<<<SQL
        INSERT INTO users (first_name, last_name, email) VALUES ('Bill', 'Gates', 'bill@microsoft.com')
    SQL);

    $pdo->exec(<<<SQL
        INSERT INTO companies (name, city) VALUES ('Apple', 'Cupertino')
    SQL);

    $pdo->exec(<<<SQL
        INSERT INTO companies (name, city) VALUES ('Microsoft', 'Seattle')
    SQL);

    $pdo->commit();
    echo "Seed OK\n";
}
catch (PDOException $e) {
    echo $e->getLine() . "\n";
    echo $e->getMessage() . "\n";
    $pdo?->rollBack();
    echo "Seed ERROR\n";
}
