<?php

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$fecha = $_POST["fecha"];

try {
    require_once 'db_inc.php';
    require_once 'modificar_reserva_model.php';
    require_once 'modificar_reserva_funct.php';

    $errors = [];

    if (isInputEmpty ($nombre, $telefono, $fecha)){
        $errors["empty_input"] = "Completa todos los campos";
    }
    if (!isNameValid ($nombre)){
        $errors["invalid_name"] = "Nombre invalido";
    }
    if (!isTelefonoValid ($telefono)){
        $errors["invalid_telefono"] = "Telefono invalido";
    }
    if (!isDateValid ($fecha)){
        $errors["invalid_date"] = "Fecha invalida";
    }
    
    require_once 'config_session_inc.php';

    if ($errors) {
        $_SESSION["errors_modificar"] = $errors;
        header("Location: ../modificar.php");
    }else {
        $idReserva = $_SESSION["id_reserva"];
        modificarReserva($pdo, $idReserva, $nombre, $telefono, $fecha);
        header("Location: ../modificar.php?modificar=success");
        $pdo = null;
        $stmt = null;
        die();
    }

} catch (PDOException $e){

    die("Query failed: " . $e->getMessage());
}