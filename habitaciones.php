<?php
    require_once './includes/db_inc.php';
    require_once './includes/habitaciones_model.php';
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
        <li><a class="active" href="./habitaciones.php">Habitaciones</a></li>
        <li><a href="./reservas.php">Mis reservas</a></li>
        <li><a href="./contacto.html">Contacto</a></li>
        <a href="./login.php" class="login"><img src="./img/login.png"></a>
        <a href="" class="bars"><img src="./img/bars.png"></a>
      </ul>
    </nav>
    <div class="container">
        <h1 class="title">Habitaciones</h1>
        <?php if(!isset($_SESSION["user_id"])){
            echo '<h2 style="margin-bottom: 20px">Inicia Sesión para poder hacer una reserva</h2>';
        }
        ?>   
        <div class="box-container">
            <?php
                $habitaciones = array();

                $habitaciones = getHabitaciones($pdo);
                
                foreach($habitaciones as $habitacion){?>
                    <a href="./hacer_reserva.php?idhabitacion=<?php echo $habitacion['id'];?>">
                        <div class="box">
                            <img src="<?php echo './img/cuarto' . $habitacion['id'] . '.jpg'?>" alt="Imagen del cuarto">
                            <div class="text">
                                <h3><?php echo $habitacion['nombre']; ?></h3>
                                <p><?php echo $habitacion['descripcion']; ?></p>
                                <p><?php echo '$' . $habitacion['precio']; ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
        </div>
    </div>
</body>
</html>