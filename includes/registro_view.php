<?php

declare(strict_types=1);

function erroresRegistro(){
    if (isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        foreach ($errors as $error){
            echo '<p style="background-color: #FF9494; text-align: center; padding: 5px 10px; border-radius: 10px; margin-bottom: 10px;">' . $error . '</p>';
        } 

        unset($_SESSION['errors_signup']);
    }else if (isset($_GET["registro"]) && $_GET["registro"] === "success"){
                echo '<p style="background-color: #23DC3D; text-align: center; padding: 5px 10px; border-radius: 10px; margin-bottom: 10px;">Registro Exitoso</p>'; 
            }   
} 
    

