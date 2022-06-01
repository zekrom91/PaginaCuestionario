<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
        alert("Por favor inicia sesion antes");
        window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF - 8">
    <meta name= "viewport" content = "width-device-width, initial-sacale-1.0">
    <title>Cuestionario</title>
    <link rel = "stylesheet" href="assets/css/estilos.css">
</head>
<body>
<div class="contenerdor__gracias">
                <!-- Formulario login -->
                <form action="php/login_usuario_be.php" method = "POST" class="formulario__login">
                    <h2>Gracias por contestar<h2>
</div>

</body>
</html>