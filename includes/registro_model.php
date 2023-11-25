<?php

declare(strict_types=1);    

function getEmail(object $pdo, string $correo){
    $query = "SELECT correo FROM users WHERE correo = :correo;";
    $stmt = $pdo-> prepare($query);
    $stmt->bindParam(":correo", $correo);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $correo, string $password){
        $query = "INSERT INTO users (correo, password) VALUES (:correo, :password);";
        
        $stmt = $pdo-> prepare($query);
        
        $options = [
            'cost' => 12
        ];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":password", $hashedPassword);
        $stmt->execute();
}
