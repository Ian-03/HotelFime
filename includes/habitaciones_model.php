<?php

declare(strict_types=1);

function getHabitaciones(object $pdo){
    $query = "SELECT * FROM habitaciones;";
    $stmt = $pdo-> prepare($query);
    $stmt->execute();

    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;    
}
