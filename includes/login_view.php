<?php

declare(strict_types=1);

function erroresLogin(){
    if (isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error){
            echo '<p style="background-color: #FF9494; text-align: center; padding: 5px 10px; border-radius: 10px; margin-bottom: 10px;">' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    }else if (isset($_GET["login"]) && $_GET["login"] === "success"){
        echo '<p style="background-color: #23DC3D; text-align: center; padding: 5px 10px; border-radius: 10px; margin-bottom: 10px;">Login Exitoso</p>';  
    }  
}
