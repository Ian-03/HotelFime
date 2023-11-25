<?php

declare(strict_types=1);

//Checar que los campos esten completados
function isInputEmpty (string $nombre, string $telefono, string $nombreTarjeta, string $tarjeta, string $vencimiento, string $fecha){
    return (empty($nombre) || empty($telefono) || empty($nombreTarjeta) || empty($tarjeta) || empty($vencimiento) || empty($fecha));
}

//Checar que nombre sea valido
function isNameValid (string $nombre){
    return preg_match("/^[a-zA-Z'-]+$/",$nombre);
}

//Checar que telefono sea valido
function isTelefonoValid (string $telefono){
    return preg_match('/^[0-9]{10}+$/', $telefono);
}

//Checar que nombre de la tarjeta sea valido
function isNameCardValid (string $nombreTarjeta){
    return preg_match("/^[a-zA-Z'-]+$/",$nombreTarjeta);
}

//Checar que el numero de la tarjeta sea valido
function isCardValid (string $tarjeta){
    return preg_match('/^[0-9]{16}+$/', $tarjeta);
}

//Checar que el numero de la tarjeta sea valido
function isVencimientoValid(string $vencimiento){
    return preg_match('/^[0-9]{4}+$/', $vencimiento);
}

//Checar que la fecha sea valida 
function isDateValid (string $date){
    return preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $date);
}
   

