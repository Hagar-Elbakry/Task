<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    try {

        require_once("conn.php");
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $options = [
            $cost = 12
        ];

        $passHash = password_hash($password, PASSWORD_BCRYPT, $options);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $passHash);
        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Query Failed" . $e->getMessage());
    }
} else {
    header("location: ../index.php");
}
