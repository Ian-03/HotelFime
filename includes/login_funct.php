<?php

declare(strict_types=1);

function isInputEmpty (string $correo, string $password){
    return (empty($correo) || empty($password));
}

function isEmailRegister(bool|array $result){
    if ($result){
        return true;
    }else {
        return false;
    }
}

function isPasswordWrong(string $password, string $hashedPassword){

    if (!password_verify($password, $hashedPassword)){
        return true;
    }else {
        return false;
    }
}