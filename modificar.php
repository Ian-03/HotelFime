<?php
    require_once 'includes/config_session_inc.php';
    require_once 'includes/modificar_reserva_view.php';
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
            <div class="container-reserva">
                <?php   
                    $id_reserva = isset($_GET["idreserva"]) ? (int)$_GET["idreserva"] : 0;

                    if ($id_reserva <= 0) {
                        $_SESSION["id_reserva"] = 1; 
                    } else {
                        $_SESSION["id_reserva"] = $id_reserva;
                    }
                ?> 
                
                <form action="./includes/modificar_reserva_inc.php" method="POST">
                    
                    <h2>Modificar datos de reserva</h2>
                    <h3>Datos Personales</h3>   
                    <div class="input-box small-input">
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <input type="tel" name="telefono" placeholder="Telefono" required>
                    </div>
                    <h3>Fecha</h3>
                    <div class="input-box small-input">
                        <label>Día: </label><input type="date" name="fecha" style="width: 50%">
                    </div>
                    <h3>Importante:</h3>
                    <p style="margin-bottom: 20px;">Es posible cancelar la reserva, presione <a href="eliminar.php"><i class="eliminar">eliminar reserva</i></a> si lo desea</p>
                    <button type="submit" class="btn-login">Modificar</button> 
                    <div style="display: inline;">
                        <?php   
                            erroresModificar();
                        ?> 
                    </div> 
                </form>
            </div>
        </div>
        
</body>
</html>