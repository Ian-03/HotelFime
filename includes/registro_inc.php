<?php

$correo = $_POST["correo"];
$password = $_POST["password"];

try {
    require_once 'db_inc.php';
    require_once 'registro_model.php';
    require_once 'registro_funct.php';

    $errors = [];

    if (isInputEmpty ($correo, $password)){
        $errors["empty_input"] = "Completa todos los campos";
    }
    if (!(isEmailValid ($correo))){
        $errors["invalid_email"] = "Correo invalido";
    }
    if (isEmailUsed ($pdo, $correo)){
        $errors["empty_input"] = "Ese correo esta en uso";
    }

    require_once 'config_session_inc.php';

    if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        header("Location: ../registro.php");
    }else {
        createUser($pdo, $correo, $password);
        header("Location: ../registro.php?registro=success");
        $pdo = null;
        $stmt = null;
        die();
    }

} catch (PDOException $e){

    die("Query failed: " . $e->getMessage());
}