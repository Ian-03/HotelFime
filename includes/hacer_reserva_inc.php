<?php

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$nombreTarjeta  = $_POST["nombreTarjeta"];
$tarjeta = $_POST["tarjeta"];
$vencimiento = $_POST["vencimiento"];
$fecha = $_POST["fecha"];

try {
    require_once 'db_inc.php';
    require_once 'hacer_reserva_model.php';
    require_once 'hacer_reserva_funct.php';

    $errors = [];

    if (isInputEmpty ($nombre, $telefono, $nombreTarjeta, $tarjeta, $vencimiento, $fecha)){
        $errors["empty_input"] = "Completa todos los campos";
    }
    if (!isNameValid ($nombre)){
        $errors["invalid_name"] = "Nombre invalido";
    }
    if (!isTelefonoValid ($telefono)){
        $errors["invalid_telefono"] = "Telefono invalido";
    }
    if (!isNameCardValid ($nombreTarjeta)){
        $errors["invalid_name_card"] = "Nombre de tarjeta invalido";
    }
    if (!isCardValid ($tarjeta)){
        $errors["invalid_card"] = "Numero de tarjeta invalido";
    }
    if (!isVencimientoValid ($vencimiento)){
        $errors["invalid_vencimiento"] = "Vencimiento invalido";
    }
    if (!isDateValid ($fecha)){
        $errors["invalid_date"] = "Fecha invalida";
    }
    if(!isset($_SESSION["user_id"])){
        $errors["invalid_login"] = "No has iniciado sesión";
    }

    require_once 'config_session_inc.php';

    if ($errors) {
        $_SESSION["errors_reserva"] = $errors;
        header("Location: ../hacer_reserva.php");
    }else {

        $idUser = $_SESSION["user_id"];
        $idHabitacion = $_SESSION["id_habitacion"];
        setReserva($pdo, $idUser, $idHabitacion, $nombre, $telefono, $fecha);
        header("Location: ../hacer_reserva.php?reserva=success");
        $pdo = null;
        $stmt = null;
        die();
    }

} catch (PDOException $e){

    die("Query failed: " . $e->getMessage());
}
