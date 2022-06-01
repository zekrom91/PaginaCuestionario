<?php
session_start();
include 'conexion_be.php';
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];
$Edad = $_POST['Edad'];
$Estado = $_POST['Estado'];
$Anos = $_POST['Anos'];
$Escolaridad = $_POST['escolaridad'];
$horario= $_POST['horariol'];
$Plazo = $_POST['Plaza'];
$Discapacidad = $_POST['Discapacidad'];
$politica = $_POST['politica'];
$centro = $_POST['centro'];
$comite = $_POST['comite'];
$mecanismo = $_POST['mecanismo'];
$oportunidades = $_POST['oportunidades'];
$proceso = $_POST['proceso'];
$contratacion = $_POST['contratacion'];
$determinante= $_POST['determinante'];
$formacion10 = $_POST['formacion10'];
$formacion11 = $_POST['formacion11'];
$formacion12 = $_POST['formacion12'];
$formacion13 = $_POST['formacion13'];
$Permanencia10 = $_POST['Permanencia10'];
$Permanencia11 = $_POST['Permanencia11'];
$Permanencia12 = $_POST['Permanencia12'];
$Permanencia13 = $_POST['Permanencia13'];
$Permanencia14 = $_POST['Permanencia14'];
$Permanencia15 = $_POST['Permanencia15'];
$familiar10 = $_POST['familiar10'];
$familiar11 = $_POST['familiar11'];
$familiar12 = $_POST['familiar12'];
$familiar13 = $_POST['familiar13'];
$familiar14 = $_POST['familiar14'];
$familiar15 = $_POST['familiar15'];
$familiar16 = $_POST['familiar16'];
$familiar17 = $_POST['familiar17'];
$familiar18 = $_POST['familiar18'];
$violencia10 = $_POST['violencia10'];
$violencia11 = $_POST['violencia11'];
$violencia12 = $_POST['violencia12'];
$violencia13 = $_POST['violencia13'];
$violencia14 = $_POST['violencia14'];
$violencia15 = $_POST['violencia15'];
$violencia16 = $_POST['violencia16'];
$violencia17 = $_POST['violencia17'];
$violencia18 = $_POST['violencia18'];
$violencia19 = $_POST['violencia19'];
$violencia191 = $_POST['violencia191'];
$violencia192 = $_POST['violencia192'];
$violencia193 = $_POST['violencia193'];
$violencia194 = $_POST['violencia194'];
$Acoso10 = $_POST['Acoso10'];
$Acoso11 = $_POST['Acoso11'];
$Acoso12 = $_POST['Acoso12'];
$Acoso13 = $_POST['Acoso13'];
$Acoso14 = $_POST['Acoso14'];
$Acoso15 = $_POST['Acoso15'];
$Acoso16 = $_POST['Acoso16'];
$Acoso17 = $_POST['Acoso17'];
$Accedibilidad10 = $_POST['Accedibilidad10'];
$Accedibilidad11 = $_POST['Accedibilidad11'];
$Accedibilidad12 = $_POST['Accedibilidad12'];
$Accedibilidad13 = $_POST['Accedibilidad13'];
$Accedibilidad14 = $_POST['Accedibilidad14'];
$Accedibilidad15 = $_POST['Accedibilidad15'];
$Accedibilidad16 = $_POST['Accedibilidad16'];
$condiciones10 = $_POST['condiciones10'];
$condiciones11 = $_POST['condiciones11'];
$condiciones12 = $_POST['condiciones12'];
$condiciones13 = $_POST['condiciones13'];

$enviar = mysqli_query($conexion, "UPDATE usuarios SET Pregunta1 ='$sexo' , Pregunta2 = '$Edad', Pregunta3 = '$Estado' , Pregunta4 = '$Anos' 
, Pregunta5 = '$Escolaridad', Pregunta6 = '$horario', Pregunta7 = '$Plazo', Pregunta8 = '$Discapacidad' , Pregunta9 = '$politica' , Pregunta10 = '$centro'
, Pregunta11 = '$comite' , Pregunta12 = '$mecanismo' , Pregunta13 = '$oportunidades', Pregunta14 = '$proceso' , Pregunta15 = '$contratacion'
, Pregunta16 = '$determinante', Pregunta17 = '$formacion10' , Pregunta18 = '$formacion11' , Pregunta19 = '$formacion12' , Pregunta20 = '$formacion13'
, Pregunta21 = '$Permanencia10' , Pregunta22 = '$Permanencia11' , Pregunta23 = '$Permanencia12' , Pregunta24 = '$Permanencia13' , Pregunta25 = '$Permanencia14' , Pregunta26 = '$Permanencia15'
, Pregunta27 = '$familiar10' , Pregunta28 = '$familiar11' , Pregunta29 = '$familiar12' , Pregunta30 = '$familiar13' , Pregunta31 = '$familiar14' , Pregunta32 = '$familiar15'
, Pregunta33 = '$familiar16' , Pregunta34 = '$familiar17' , Pregunta35 = '$familiar18' , Pregunta36 = '$violencia10' , Pregunta37 = '$violencia11' , Pregunta38 = '$violencia12'
, Pregunta39 = '$violencia13' , Pregunta40 = '$violencia14' , Pregunta41 = '$violencia15' , Pregunta42 = '$violencia16' , Pregunta43 = '$violencia17' , Pregunta44 = '$violencia18'
, Pregunta44 = '$violencia19' , Pregunta45 = '$violencia19', Pregunta46 = '$violencia191' , Pregunta47 = '$violencia192' , Pregunta48 = '$violencia193', Pregunta49 = '$violencia194'
, Pregunta50 = '$Acoso10' , Pregunta51 = '$Acoso11' , Pregunta52 = '$Acoso12' , Pregunta53 = '$Acoso13' , Pregunta54 = '$Acoso14' , Pregunta55 = '$Acoso15' , Pregunta56 = '$Acoso16' , Pregunta57 = '$Acoso17'
, Pregunta58 = '$Accedibilidad10' , Pregunta59 = '$Accedibilidad11' , Pregunta60 = '$Accedibilidad12' , Pregunta61 = '$Accedibilidad13'  , Pregunta62 = '$Accedibilidad14' , Pregunta63 = '$Accedibilidad15' 
, Pregunta64 = '$Accedibilidad16' , Pregunta65 = '$condiciones10' , Pregunta66 = '$condiciones11' , Pregunta67 = '$condiciones12' , Pregunta68 = '$condiciones13' WHERE correo = '$correo'");

	
echo '
<script>
    alert("Encuesta envidada con exito");
    window.location = "../Gracias.php";
</script>
';

?>