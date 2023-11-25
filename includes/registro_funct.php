<?php

declare(strict_types=1);

//Checar que ambos campos esten completados
function isInputEmpty (string $correo, string $password){
    return (empty($correo) || empty($password));
}

//Checar que sean validos los campos
function isEmailValid (string $correo){
    return (filter_var($correo,FILTER_VALIDATE_EMAIL));
}

//Checar que sea un correo unico y no repetido
function isEmailUsed (object $pdo, string $correo){
    return (getEmail($pdo, $correo));
}

function createUser(object $pdo, string $correo, string $password){
    setUser($pdo, $correo, $password);
}

