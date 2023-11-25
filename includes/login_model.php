<?php

declare(strict_types=1);

function getEmail(object $pdo, string $correo){
    $query = "SELECT * FROM users WHERE correo = :correo;";
    $stmt = $pdo-> prepare($query);
    $stmt->bindParam(":correo", $correo);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}