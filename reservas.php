<?php
    require_once './includes/db_inc.php';
    require_once './includes/config_session_inc.php';
    require_once './includes/reservas_model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Fime</title>
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
    <div class="container">
        <h1 class="title">Reservaciones</h1>
        <div class="box-container box-reservas">
            <?php

                if (isset($_SESSION["user_id"])){
                    $reservas = array();

                    $reservas = getReservas($pdo);
                    
                    foreach($reservas as $reserva){?>
                        
                        <div class="box flex">

                            <img src="<?php echo './img/cuarto' . $reserva['idHabitacion'] . '.jpg'?>" alt="Imagen del cuarto">
                            <div class="text">
                                <h3><?php echo 'Reserva de: ' . $reserva['nombre']; ?></h3>
                                <h4><?php echo getNombreHabitacion($pdo, $reserva['idHabitacion']) ?></h4>
                                <p><?php echo getDescripcionHabitacion($pdo, $reserva['idHabitacion']) ?></p>
                                <p><?php echo 'Telefono registrado: ' . $reserva['telefono'] ?></p>
                                <h5><?php echo 'Fecha de reserva: ' . $reserva['fecha'] ?></h5>
                                <div class="button-modify">
                                    <a href="modificar.php?idreserva=<?php echo $reserva['id'];?>">
                                        <button class="btn-black" style="margin-top: 20px;">Modificar</button>
                                    </a>
                                </div>
                            </div>
                        </div>  
                    <?php
                    }   
                }else{
                    echo '<h2>Inicia Sesión para poder tus reservas </h2>';
                }
                ?>
        </div>
    </div>
</body>
</html>