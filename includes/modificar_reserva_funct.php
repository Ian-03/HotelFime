<?php

declare(strict_types=1);

//Checar que los campos esten completados
function isInputEmpty (string $nombre, string $telefono, string $fecha){
    return (empty($nombre) || empty($telefono) || empty($fecha));
}

//Checar que nombre sea valido
function isNameValid (string $nombre){
    return preg_match("/^[a-zA-Z'-]+$/",$nombre);
}

//Checar que telefono sea valido
function isTelefonoValid (string $telefono){
    return preg_match('/^[0-9]{10}+$/', $telefono);
}

//Checar que la fecha sea valida 
function isDateValid (string $date){
    return preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $date);
}