<?php

$correo = $_POST["correo"];
$password = $_POST["password"];

try{
    require_once 'db_inc.php';
    require_once 'login_model.php';
    require_once 'login_funct.php';

    $errors = [];

    if (isInputEmpty ($correo, $password)){
        $errors["empty_input"] = "Completa todos los campos";
    }
    
    $result = getEmail($pdo, $correo);

    if (!(isEmailRegister($result)) && !(empty($correo))){
        $errors["unregister_email"] = "Email no registrado";
    }

    if (isEmailRegister($result) && !(isPasswordWrong($password, $result["password"])) && !(empty($password))){
        $errors["wrong_password"] = "Contraseña invalida";
    }

    require_once 'config_session_inc.php';  

    if ($errors) {
        $_SESSION["errors_login"] = $errors;
        header("Location: ../login.php");
    }else{
        
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_correo"] = htmlspecialchars($result["correo"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../login.php?login=success");

        $pdo = null;
        $stmt = null;

        die();
    }

}catch (PDOException $e){
    die("Query failed: " . e->getMessage());
}