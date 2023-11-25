<?php
    require_once 'includes/config_session_inc.php';
    require_once 'includes/hacer_reserva_view.php';
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
        <li><a class="active" href="./habitaciones.php">Habitaciones</a></li>
        <li><a href="./reservas.php">Mis reservas</a></li>
        <li><a href="./contacto.html">Contacto</a></li>
        <a href="./login.php" class="login"><img src="./img/login.png"></a>
        <a href="" class="bars"><img src="./img/bars.png"></a>
      </ul>
    </nav>
    <div class="login-container">
            <div class="container-reserva">
                <?php   
                    $id_habitacion = isset($_GET["idhabitacion"]) ? (int)$_GET["idhabitacion"] : 0;

                    if ($id_habitacion <= 0) {
                        $_SESSION["id_habitacion"] = 1; 
                    } else {
                        $_SESSION["id_habitacion"] = $id_habitacion;
                    }
                ?> 
                
                <form action="./includes/hacer_reserva_inc.php" method="POST">
                    
                    <h2>Hacer reserva</h2>
                    <h3>Datos Personales</h3>   
                    <div class="input-box small-input">
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <input type="tel" name="telefono" placeholder="Telefono" required>
                    </div>
                    <h3>Datos bancarios</h3>
                    <div class="input-box small-input">
                        <input type="text" name="nombreTarjeta" placeholder="Nombre del Titular" required>
                        <input type="number" name="tarjeta" placeholder="Tarjeta (16 dígitos)" required>
                    </div>
                    <div class="input-box small-input">
                        <input type="number" name="vencimiento" placeholder="Año de Vencimiento" style="width: 80%;"required>
                        <label>Día: </label><input type="date" name="fecha">
                    </div>
                    <button type="submit" class="btn-login">Reservar</button> 
                    <div style="display: inline;">
                        <?php   
                            erroresRegistro();
                        ?> 
                    </div> 
                </form>
            </div>
        </div>
        
</body>
</html>