<?php

declare(strict_types=1);   

function setReserva(object $pdo, string $idUser, string $idHabitacion, string $nombre, string $telefono, string $fecha){
        $query = "INSERT INTO reservas (idUser, idHabitacion, nombre, telefono, fecha) VALUES (:idUser, :idHabitacion, :nombre, :telefono, :fecha);";     
        $stmt = $pdo-> prepare($query);

        $stmt->bindParam(":idUser", $idUser);
        $stmt->bindParam(":idHabitacion", $idHabitacion);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":fecha", $fecha);
        $stmt->execute();
}

function deleteReserva(object $pdo, string $idUser){
        $query = "DELETE FROM  reservas WHERE id = :idUser';";     
        $stmt = $pdo-> prepare($query);
        $stmt->bindParam(":idUser", $idUser);
        $stmt->execute();
}
