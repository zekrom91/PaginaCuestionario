<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$n_control = $_POST['n_control'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios(nombre_completo, numero_control, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$n_control', '$correo', '$usuario','$contrasena')";

//Verificacion que no se repita el registro en la base de datos//

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
        alert("Este correo ya registrado, intentalo denuevo");
        window.location = "../index.php";
    </script>
    
    ';
    exit();
}
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
        alert("Este usuario ya registrado, intentalo denuevo");
        window.location = "../index.php";
    </script>
    
    ';
    exit();
}$verificar_n_control = mysqli_query($conexion, "SELECT * FROM usuarios WHERE numero_control = '$n_control' ");

if(mysqli_num_rows($verificar_n_control) > 0){
    echo '
    <script>
        alert("Este numero de control ya registrado, intentalo denuevo");
        window.location = "../index.php";
    </script>
    
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("No se ha podido almacenar correctamente");
        window.location = "../index.php";
    </script>
    ';
}
  mysqli_close($conexion);
?>