<?php

declare(strict_types=1);    

function deleteReserva(object $pdo, string $id){

    $query = "DELETE FROM reservas WHERE id = :id;";
    $stmt = $pdo-> prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}