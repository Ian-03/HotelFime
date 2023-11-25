<?php

declare(strict_types=1);

function erroresModificar(){
    if (isset($_SESSION['errors_modificar'])){
        $errors = $_SESSION['errors_modificar'];

        foreach ($errors as $error){
            echo '<p style="background-color: #FF9494; text-align: center; padding: 5px 10px; border-radius: 
            10px; margin-bottom: 10px;">' . $error . '</p>';
        } 

        unset($_SESSION['errors_modificar']);
    }else if (isset($_GET["modificar"]) && $_GET["modificar"] === "success"){
                echo '<p style="background-color: #23DC3D; text-align: center; padding: 5px 10px; border-radius: 
                10px; margin-bottom: 10px;">Reserva Exitoso</p>'; 
            }   
} 
    