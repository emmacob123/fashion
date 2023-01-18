<?php
try {
    $username = "root";
    $password = "";
    $dsn = "mysql:host=localhost; dbname=fashion";

    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Cannot connect to fashion database " . $error->getMessage();
}
?>