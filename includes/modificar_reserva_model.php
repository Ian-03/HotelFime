<?php

declare(strict_types=1);    

function modificarReserva(object $pdo, string $id, string $nombre, string $telefono, string $fecha){
        $query = "UPDATE reservas SET nombre = :nombre, telefono = :telefono, fecha = :fecha WHERE id = :id;";    
        $stmt = $pdo-> prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":fecha", $fecha);
        $stmt->execute();
}