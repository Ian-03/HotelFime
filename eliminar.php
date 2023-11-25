<?php
    require_once 'includes/config_session_inc.php';
    require_once 'includes/eliminar_reserva.php';
    require_once 'includes/db_inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacer Reserva</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
      <label class="logo">Hotel Fime</label>
      <ul>
        <li><a href="./index.html">Inicio</a></li>
        <li><a href="./habitaciones.php">Habitaciones</a></li>
        <li><a class="active" href="./reservas.php">Mis reservas</a></li>
        <li><a href="./contacto.html">Contacto</a></li>
        <a href="./login.php" class="login"><img src="./img/login.png"></a>
        <a href="" class="bars"><img src="./img/bars.png"></a>
      </ul>
    </nav>
    <div class="login-container">
            <div class="container-reserva" >
                
                <div style="display: inline;">
                    <h2>Eliminar Reserva</h2>
                        
                    <p class="eliminar-p">¿Estas seguro que deseas eliminar la reserva?</p>
                    
                    <a href="./reservas.php"><div>
                            <?php deleteReserva($pdo, $_SESSION["id_reserva"]); ?>
                            <button class="btn-login" style="background-color: white; color: black;">Volver</button> 
                            <button class="btn-login">Eliminar</button> 
                    </div></a> 
                </div>          
                
            </div>
        </div>
        
</body>
</html>