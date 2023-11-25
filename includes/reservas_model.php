<?php

declare(strict_types=1);

function getReservas(object $pdo){

    $id = $_SESSION["user_id"];
    $query = "SELECT * FROM reservas WHERE idUser = :idUser;";
    $stmt = $pdo-> prepare($query);
    $stmt->bindParam(":idUser", $id);
    $stmt->execute();

    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;    
}

function getNombreHabitacion(object $pdo, int $id){
    $query = "SELECT nombre FROM habitaciones WHERE id = :idUser;";
    $stmt = $pdo-> prepare($query);
    $stmt->bindParam(":idUser", $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['nombre'];
}

function getDescripcionHabitacion(object $pdo, int $id){
    $query = "SELECT descripcion FROM habitaciones WHERE id = :idUser;";
    $stmt = $pdo-> prepare($query);
    $stmt->bindParam(":idUser", $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['descripcion'];
}
