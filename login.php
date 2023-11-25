<?php
    require_once 'includes/config_session_inc.php';
    require_once 'includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
      <label class="logo">Hotel Fime</label>
      <ul>
        <li><a class="active" href="./index.html">Inicio</a></li>
        <li><a href="./habitaciones.php">Habitaciones</a></li>
        <li><a href="./reservas.php">Mis reservas</a></li>
        <li><a href="./contacto.html">Contacto</a></li>
        <a href="./login.php" class="login"><img src="./img/login.png"></a>
        <a href="" class="bars"><img src="./img/bars.png"></a>
      </ul>
    </nav>
    <div class="login-container">
        <div class="wrapper">
            <form action="./includes/login_inc.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" name="correo" placeholder="Correo">
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <div class="recordar">
                    <label><input type="checkbox">Recordarme</label>
                </div>
                <button type="submit" class="btn-login">Entrar</button> 
                <div class="registro">
                    <p>¿No tienes una cuenta? <a href="./registro.php">Crear cuenta</a></p>     
                </div>
                <div style="display: inline;">
                    <?php
                        erroresLogin();
                        
                        if (isset($_SESSION["user_correo"])){
                            $correo = $_SESSION["user_correo"];
                            echo '<p style="text-align: center; font-size: 15px; margin-bottom: 10px; text-decoration: underline;">Sesión: ' . $correo . '</p>';
                         } 
                        ?> 
                </div> 
            </form>
        </div>
    </div> 
</body>
</html>