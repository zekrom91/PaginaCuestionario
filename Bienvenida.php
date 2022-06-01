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

<div class="contenerdor__cuestionario">
    <br>
    <h1> Cuestionario Clima Laboral y no discriminacion </h1><br>
    <a href= "php/cerrar_sesion.php"> Cerrar Sesion</a><br>
    <form action="php/RegistroCuestionario.php" method = "POST"  class="formulario_cuestionario">
        
        <br>
        <input type= "text" placeholder = "Correo Electrónico" name  = "correo">
        <h10>Sexo</h10><br>
        <input type= "radio" id = "sexo1" value = "masculino" name =  "sexo" checked="checked" ><label for="sexo1">Masculino</label>
        <input type= "radio" id = "sexo2" value = "femenino" name = "sexo" checked="checked"><label for="sexo2">Femenino</label>
        <input type= "radio" id = "sexo3" value = "otro" name = "sexo" checked="checked" ><label for="sexo3">Otro</label>
        <br>
        <h10>Edad</h10><br>
        <input type= "radio" id = "edad1" value = "15-29" name = "Edad" checked="checked"><label for="edad1">15 - 29</label>
        <input type= "radio" id = "edad2" value = "30-39" name = "Edad" checked="checked"><label for="edad2">30 - 39</label>
        <input type= "radio" id = "edad3" value = "40-49" name = "Edad" checked="checked"><label for="edad3">40 - 49</label>
        <input type= "radio" id = "edad4" value = "50-59" name = "Edad" checked="checked"><label for="edad4">50 - 59</label>
        <input type= "radio" id = "edad5" value = "60-mas" name = "Edad" checked="checked"><label for="edad5">60 o mas</label>
        <br>

        <h10>Estado civil o coyugal</h10><br>
        <input type= "radio" id = "estado1" value = "soltera" name = "Estado" checked="checked"><label for="estado1">Soltera(o)</label>
        <input type= "radio" id = "estado2" value = "casada" name = "Estado" checked="checked"><label for="estado2">Casada(o)</label>
        <input type= "radio" id = "estado3" value = "union-libre" name = "Estado" checked="checked"><label for="estado3">Unión libre</label>
        <input type= "radio" id = "estado4" value = "divorciada" name = "Estado" checked="checked"><label for="estado4">Divorciada(o)</label>
        <input type= "radio" id = "estado5" value = "viuda" name = "Estado" checked="checked"><label for="estado5">Viuda(o)</label>
        <br>
        <h10>Años de antiguedad en el centro de trabajo</h10><br>
        <input type= "radio" id = "ano1" value = "menos-1" name = "Anos" checked="checked"><label for="ano1">Menos de un año</label>
        <input type= "radio" id = "ano2" value = "1-3" name = "Anos" checked="checked"><label for="ano2">De 1 - 3 años</label>
        <input type= "radio" id = "ano3" value = "4-9" name = "Anos" checked="checked"><label for="ano3">De 4 - 9 años</label>
        <input type= "radio" id = "ano4" value = "mas-10" name = "Anos" checked="checked"><label for="ano4">Más de 10 años</label>
        <br>

        <h10>Escolaridad</h10><br>
        <input type= "radio" id = "Escolaridad1" value = "sin" name = "escolaridad" checked="checked"><label for="Escolaridad1">Sin Escolaridad</label>
        <input type= "radio" id = "Escolaridad2" value = "primaria" name = "escolaridad" checked="checked"><label for="Escolaridad2">Primaria</label>
        <input type= "radio" id = "Escolaridad3" value = "secundaria" name = "escolaridad" checked="checked"><label for="Escolaridad3">Secundaria</label>
        <input type= "radio" id = "Escolaridad4" value = "bachillerato" name = "escolaridad" checked="checked"><label for="Escolaridad4">Bachillerato o preparatoria</label>
        <input type= "radio" id = "Escolaridad5" value = "carrera-tecnica" name = "escolaridad" checked="checked"><label for="Escolaridad5">Carrera Tecnica</label>
        <input type= "radio" id = "Escolaridad6" value = "licenciatura" name = "escolaridad" checked="checked"><label for="Escolaridad6">Licenciatura</label>
        <input type= "radio" id = "Escolaridad7" value = "maestria" name = "escolaridad" checked="checked"><label for="Escolaridad7">Maestria</label>
        <input type= "radio" id = "Escolaridad8" value = "doctorado" name = "escolaridad" checked="checked"><label for="Escolaridad8">Doctorado</label>

        <input type = "text" placeholder= "Horario de trabajo" name = "horariol"><br>
        <br>

        <h10>Tipo de plaza</h10><br>
        <input type= "radio" id = "plaza1" value = "base" name = "Plaza" checked="checked"><label for="plaza1">Base</label>
        <input type= "radio" id = "plaza2" value = "honorarios" name = "Plaza" checked="checked"><label for="plaza2">Honorarios</label>
        <input type= "radio" id = "plaza3" value = "confianza" name = "Plaza" checked="checked"><label for="plaza3">Confianza</label>
        <input type= "radio" id = "plaza4" value = "otro" name = "Plaza" checked="checked"><label for="plaza4">Otro</label>
        <br>

        <h10>Tienes alguna discapacidad?</h10><br>
        <input type= "radio" id = "discapacidad1" value = "si" name = "Discapacidad" checked="checked"><label for="discapacidad1">Si</label>
        <input type= "radio" id = "discapacidad2" value = "no" name = "Discapacidad" checked="checked"><label for="discapacidad2">No</label>
        <br>

        <h10>En su centro de trabajo existe un politica de igualdad social y no discriminacion</h10><br>
        <input type= "radio" id = "politica1" value = "si" name = "politica" checked="checked"><label for="politica1">Si</label>
        <input type= "radio" id = "politica2" value = "no" name = "politica" checked="checked"><label for="politica2">No</label>
        <input type= "radio" id = "politica3" value = "nose" name = "politica" checked="checked"><label for="politica3">No sé</label>
        <br>

        <h10>En su centro de trabajo existe un código de ética y/o conducta</h10><br>
        <input type= "radio" id = "centro1" value = "si" name = "centro" checked="checked"><label for="centro1">Si</label>
        <input type= "radio" id = "centro2" value = "no" name = "centro" checked="checked"><label for="centro2">No</label>
        <input type= "radio" id = "centro3" value = "nose" name = "centro" checked="checked"><label for="centro3">No sé</label>
        <br>

        <h10>En su centro de trabajo existe un comité de igualdad y no discriminación</h10><br>
        <input type= "radio" id = "comite1" value = "si" name = "comite" checked="checked"><label for="comite1">Si</label>
        <input type= "radio" id = "comite2" value = "no" name = "comite" checked="checked"><label for="comite2">No</label>
        <input type= "radio" id = "comite3" value = "nose" name = "comite" checked="checked"><label for="comite3">No sé</label>
        <br>

        <h10>En su centro de trabajo existe un mecanismo para prevenir, atender y sancionar las prácticas de discriminación y violencia laboral</h10><br>
        <input type= "radio" id = "mecanismo1" value = "si" name = "mecanismo" checked="checked"><label for="mecanismo1">Si</label>
        <input type= "radio" id = "mecanismo2" value = "no" name = "mecanismo" checked="checked"><label for="mecanismo2">No</label>
        <input type= "radio" id = "mecanismo3" value = "nose" name = "mecanismo" checked="checked"><label for="mecanismo3">No sé</label>
        <br>

        <h11>Reclutamiento y selección de personal</h11><br>
        <br>
        <h10>Para su contratación fue más importante ser mujer u hombre que sus habilidades profesionales.</h10>
        <input type= "radio" id = "oportunidades1" value = "si" name = "oportunidades" checked="checked"><label for="oportunidades1">Si</label>
        <input type= "radio" id = "oportunidades2" value = "no" name = "oportunidades" checked="checked"><label for="oportunidades2">No</label>
        <br>

        <h10>En su centro de trabajo el proceso de contratación favorece más a personas jóvenes.</h10>
        <input type= "radio" id = "proceso1" value = "si" name = "proceso" checked="checked"><label for="proceso1">Si</label>
        <input type= "radio" id = "proceso2" value = "no" name = "proceso" checked="checked"><label for="proceso2">No</label>
        <br>

        <h10>En el momento de su contratación, su edad fue determinante.</h10>
        <input type= "radio" id = "contratacion1"  value = "si" name = "contratacion" checked="checked"><label for="contratacion1">Si</label>
        <input type= "radio" id = "contratacion2" value = "no" name = "contratacion" checked="checked"><label for="contratacion2">No</label>
        <br>

        <h10>Para su contratación fue determinante su apariencia física.</h10>
        <input type= "radio" id = "determinante1" value = "si" name = "determinante" checked="checked"><label for="determinante1">Si</label>
        <input type= "radio" id = "determinante2" value = "no" name = "determinante" checked="checked"><label for="determinante2">No</label>
        <br>

        <h11>Formación y capacitación</h11><br>
        <br>
        <h10>En su centro de trabajo las oportunidades de desarrollo laboral solo las reciben unas cuántas personas privilegiadas.</h10>
        <input type= "radio" id = "formacion1" value = "nunca" name = "formacion10" checked="checked"><label for="formacion1">Nunca</label>
        <input type= "radio" id = "formacion2" value = "algunzas-veces" name = "formacion10" checked="checked"><label for="formacion2">Algunas veces</label>
        <input type= "radio" id = "formacion3" value = "con-frecuencia" name = "formacion10" checked="checked"><label for="formacion3">Con frecuencia</label>
        <input type= "radio" id = "formacion4" value = "siempre" name = "formacion10" checked="checked"><label for="formacion4">Siempre</label>
        <br>

        <h10>En su centro de trabajo mujeres y hombres tienen por igual oportunidades de ascenso y capacitación.</h10>
        <input type= "radio" id = "formacion11" value = "nunca" name = "formacion11" checked="checked"><label for="formacion11">Nunca</label>
        <input type= "radio" id = "formacion21" value = "aveces" name = "formacion11" checked="checked"><label for="formacion21">Algunas veces</label>
        <input type= "radio" id = "formacion31" value = "con-frecuencia" name = "formacion11" checked="checked"><label for="formacion31">Con frecuencia</label>
        <input type= "radio" id = "formacion41" value = "siempre" name = "formacion11" checked="checked"><label for="formacion41">Siempre</label>
        <br>

        <h10>En su centro de trabajo se cuenta con programas de capacitación en materia de igualdad laboral y no discriminación.</h10>
        <input type= "radio" id = "formacion12" value = "nunca" name = "formacion12" checked="checked"><label for="formacion12">Nunca</label>
        <input type= "radio" id = "formacion22" value = "aveces" name = "formacion12" checked="checked"><label for="formacion22">Algunas veces</label>
        <input type= "radio" id = "formacion32" value = "con-frecuencia" name = "formacion12" checked="checked"><label for="formacion32">Con frecuencia</label>
        <input type= "radio" id = "formacion42" value = "siempre" name = "formacion12" checked="checked"><label for="formacion42">Siempre</label>
        <br>

        <h10>En los últimos 12 meses usted ha participado en programas de capacitación.</h10>
        <input type= "radio" id = "formacion13" value = "nunca" name = "formacion13" checked="checked"><label for="formacion13">Nunca</label>
        <input type= "radio" id = "formacion23" value = "aveces" name = "formacion13" checked="checked"><label for="formacion23">Algunas veces</label>
        <input type= "radio" id = "formacion33" value = "con-frecuencia" name = "formacion13" checked="checked"><label for="formacion33">Con frecuencia</label>
        <input type= "radio" id = "formacion43" value = "siempre" name = "formacion13" checked="checked"><label for="formacion43">Siempre</label>
        <br>

        <h11>Permanencia y ascenso</h11><br>
        <br>
        <h10>En su centro de trabajo para lograr la contratación, una promoción o un ascenso cuentan más las recomendaciones que los conocimientos y capacidades de la persona.</h10>
        <input type= "radio" id = "Permanencia1" value = "nunca" name = "Permanencia10" checked="checked"><label for="Permanencia1">Nunca</label>
        <input type= "radio" id = "Permanencia2" value = "aveces" name = "Permanencia10" checked="checked"><label for="Permanencia2">Algunas veces</label>
        <input type= "radio" id = "Permanencia3" value = "con-frecuencia" name = "Permanencia10" checked="checked"><label for="Permanencia3">Con frecuencia</label>
        <input type= "radio" id = "Permanencia4" value = "siempre" name = "Permanencia10" checked="checked"><label for="Permanencia4">Siempre</label>
        <br>

        <h10>En su centro de trabajo se ha despedido a alguna mujer por embarazo u orillado a renunciar al regresar de su licencia de maternidad.</h10>
        <input type= "radio" id = "Permanencia11" value = "nunca" name = "Permanencia11" checked="checked"><label for="Permanencia11">Nunca</label>
        <input type= "radio" id = "Permanencia21" value = "aveces" name = "Permanencia11" checked="checked"><label for="Permanencia21">Algunas veces</label>
        <input type= "radio" id = "Permanencia31" value = "con-frecuencia" name = "Permanencia11" checked="checked"><label for="Permanencia31">Con frecuencia</label>
        <input type= "radio" id = "Permanencia41" value = "siempre" name = "Permanencia11" checked="checked"><label for="Permanencia41">Siempre</label>
        <br>

        <h10>En su centro de trabajo la competencia por mejores puestos, condiciones laborales o salariales es justas</h10>
        <input type= "radio" id = "Permanencia12" value = "nunca" name = "Permanencia12" checked="checked"><label for="Permanencia12">Nunca</label>
        <input type= "radio" id = "Permanencia22" value = "aveces" name = "Permanencia12" checked="checked"><label for="Permanencia22">Algunas veces</label>
        <input type= "radio" id = "Permanencia32" value = "con-frecuencia" name = "Permanencia12" checked="checked"><label for="Permanencia32">Con frecuencia</label>
        <input type= "radio" id = "Permanencia42" value = "siempre" name = "Permanencia12" checked="checked"><label for="Permanencia42">Siempre</label>
        <br>

        <h10>En su centro de trabajo mujeres y hombres tienen las mismas oportunidades para ocupar puestos de decisión.</h10>
        <input type= "radio" id = "Permanencia13" value = "nunca" name = "Permanencia13" checked="checked"><label for="Permanencia13">Nunca</label>
        <input type= "radio" id = "Permanencia23" value = "aveces" name = "Permanencia13" checked="checked"><label for="Permanencia23">Algunas veces</label>
        <input type= "radio" id = "Permanencia33" value = "con-frecuencia" name = "Permanencia13" checked="checked"><label for="Permanencia33">Con frecuencia</label>
        <input type= "radio" id = "Permanencia43" value = "siempre" name = "Permanencia13" checked="checked"><label for="Permanencia43">Siempre</label>
        <br>

        <h10>En su centro de trabajo se cuenta con un sistema de evaluación de desempeño del personal.</h10>
        <input type= "radio" id = "Permanencia14" value = "nunca" name = "Permanencia14" checked="checked"><label for="Permanencia14">Nunca</label>
        <input type= "radio" id = "Permanencia24" value = "aveces" name = "Permanencia14" checked="checked"><label for="Permanencia24">Algunas veces</label>
        <input type= "radio" id = "Permanencia34" value = "con-frecuencia" name = "Permanencia14" checked="checked"><label for="Permanencia34">Con frecuencia</label>
        <input type= "radio" id = "Permanencia44" value = "siempre" name = "Permanencia14" checked="checked"><label for="Permanencia44">Siempre</label>
        <br>

        <h10>En los últimos 12 meses le han realizado una evaluación de desempeño.</h10>
        <input type= "radio" id = "Permanencia15" value = "nunca" name = "Permanencia15" checked="checked"><label for="Permanencia15">Nunca</label>
        <input type= "radio" id = "Permanencia25" value = "aveces" name = "Permanencia15" checked="checked"><label for="Permanencia25">Algunas veces</label>
        <input type= "radio" id = "Permanencia35" value = "con-frecuencia" name = "Permanencia15" checked="checked"><label for="Permanencia35">Con frecuencia</label>
        <input type= "radio" id = "Permanencia45" value = "siempre" value = "nunca" name = "Permanencia15" checked="checked"><label for="Permanencia45">Siempre</label>
        <br>

        <h11>Corresponsabilidad en la vida laboral, familiar y personal</h11><br>
        <br>
        <h10>En su centro de trabajo tanto mujeres como hombres tienen las mismas facilidades para atender problemas familiares no previstos.</h10>
        <input type= "radio" id = "familiar1" value = "nunca" name = "familiar10" checked="checked"><label for="familiar1">Nunca</label>
        <input type= "radio" id = "familiar2" value = "aveces" name = "familiar10" checked="checked"><label for="familiar2">Algunas veces</label>
        <input type= "radio" id = "familiar3" value = "con-frecuencia" name = "familiar10" checked="checked"><label for="familiar3">Con frecuencia</label>
        <input type= "radio" id = "familiar4" value = "siempre" name = "familiar10" checked="checked"><label for="familiar4">Siempre</label>
        <br>
        
        <h10>En su centro de trabajo las mujeres embarazadas enfrentan un clima laboral hostil.</h10>
        <input type= "radio" id = "familiar11" value = "nunca" name = "familiar11" checked="checked"><label for="familiar11">Nunca</label>
        <input type= "radio" id = "familiar21" value = "aveces" name = "familiar11" checked="checked"><label for="familiar21">Algunas veces</label>
        <input type= "radio" id = "familiar31" value = "con-frecuencia" name = "familiar11" checked="checked"><label for="familiar31">Con frecuencia</label>
        <input type= "radio" id = "familiar41" value = "siempre" name = "familiar11" checked="checked"><label for="familiar41">Siempre</label>
        <br>

        <h10>En su centro de trabajo las personas que se hacen cargo de personas o familiares que requieren cuidados enfrentan un clima laboral hostil.</h10>
        <input type= "radio" id = "familiar12" value = "nunca" name = "familiar12" checked="checked"><label for="familiar12">Nunca</label>
        <input type= "radio" id = "familiar22" value = "aveces" name = "familiar12" checked="checked"><label for="familiar22">Algunas veces</label>
        <input type= "radio" id = "familiar32" value = "con-frecuencia" name = "familiar12" checked="checked"><label for="familiar32">Con frecuencia</label>
        <input type= "radio" id = "familiar42" value = "siempre" name = "familiar12" checked="checked"><label for="familiar42">Siempre</label>
        <br>

        <h10>En su centro de trabajo los hombres cuentan con licencia de paternidad por nacimiento o adopción de una hija(o)</h10>
        <input type= "radio" id = "familiar13" value = "nunca" name = "familiar13" checked="checked"><label for="familiar13">Nunca</label>
        <input type= "radio" id = "familiar23" value = "aveces" name = "familiar13" checked="checked"><label for="familiar23">Algunas veces</label>
        <input type= "radio" id = "familiar33" value = "con-frecuencia" name = "familiar13" checked="checked"><label for="familiar33">Con frecuencia</label>
        <input type= "radio" id = "familiar43" value = "siempre" name = "familiar13" checked="checked"><label for="familiar43">Siempre</label>
        <br>

        <h10>En su centro de trabajo la licencia de paternidad se otorga por más de cinco días.</h10>
        <input type= "radio" id = "familiar14" value = "nunca" name = "familiar14" checked="checked"><label for="familiar14">Nunca</label>
        <input type= "radio" id = "familiar24" value = "aveces" name = "familiar14" checked="checked"><label for="familiar24">Algunas veces</label>
        <input type= "radio" id = "familiar34" value = "con-frecuencia" name = "familiar14" checked="checked"><label for="familiar34">Con frecuencia</label>
        <input type= "radio" id = "familiar44" value = "siempre" name = "familiar14" checked="checked"><label for="familiar44">Siempre</label>
        <br>

        <h10>En su centro de trabajo se otorgan permisos para atender situaciones familiares como cuidado de hijas e hijos, personas enfermas o personas adultas mayores.</h10>
        <input type= "radio" id = "familiar15" value = "nunca" name = "familiar15" checked="checked"><label for="familiar15">Nunca</label>
        <input type= "radio" id = "familiar25" value = "aveces" name = "familiar15" checked="checked"><label for="familiar25">Algunas veces</label>
        <input type= "radio" id = "familiar35" value = "con-frecuencia" name = "familiar15" checked="checked"><label for="familiar35">Con frecuencia</label>
        <input type= "radio" id = "familiar45" value = "siempre" name = "familiar15" checked="checked"><label for="familiar45">Siempre</label>
        <br>

        <h10>En su centro de trabajo existen convenios con prestadores de servicios que contemplen beneficios para el personal tales como: lavanderías, comedores, planchadurías, transporte, entre otros.</h10>
        <input type= "radio" id = "familiar16" value = "nunca" name = "familiar16" checked="checked"><label for="familiar16">Nunca</label>
        <input type= "radio" id = "familiar26" value = "aveces" name = "familiar16" checked="checked"><label for="familiar26">Algunas veces</label>
        <input type= "radio" id = "familiar36" value = "con-frecuencia" name = "familiar16" checked="checked"><label for="familiar36">Con frecuencia</label>
        <input type= "radio" id = "familiar46" value = "siempre" name = "familiar16" checked="checked"><label for="familiar46">Siempre</label>
        <br>

        <h10>En su centro de trabajo, si usted decidiera usar las opciones de trabajo flexibles ¿se cuestionaría su compromiso ante su trabajo?</h10>
        <input type= "radio" id = "familiar17" value = "nunca" name = "familiar17" checked="checked"><label for="familiar17">Nunca</label>
        <input type= "radio" id = "familiar27" value = "aveces" name = "familiar17" checked="checked"><label for="familiar27">Algunas veces</label>
        <input type= "radio" id = "familiar37" value = "con-frecuencia" name = "familiar17" checked="checked"><label for="familiar37">Con frecuencia</label>
        <input type= "radio" id = "familiar47" value = "siempre" name = "familiar17" checked="checked"><label for="familiar47">Siempre</label>
        <br>

        <h10>En su centro de trabajo usted puede acercarse a su jefa (e) inmediata (o)n para hablar sobre cuestiones relacionadas con horarios que le estén afectando.</h10>
        <input type= "radio" id = "familiar18" value = "nunca" name = "familiar18" checked="checked"><label for="familiar18">Nunca</label>
        <input type= "radio" id = "familiar28" value = "aveces" name = "familiar18" checked="checked"><label for="familiar28">Algunas veces</label>
        <input type= "radio" id = "familiar38" value = "con-frecuencia" name = "familiar18" checked="checked"><label for="familiar38">Con frecuencia</label>
        <input type= "radio" id = "familiar48" value = "siempre" name = "familiar18" checked="checked"><label for="familiar48">Siempre</label>
        <br>

        <h11>Clima laboral libre de violencia</h11><br>
        <br>
        <h10>Usted siente que se le trata con respeto en su trabajo actual.</h10>
        <input type= "radio" id = "violencia1" value = "nunca" name = "violencia10" checked="checked"><label for="violencia1">Nunca</label>
        <input type= "radio" id = "violencia2" value = "aveces" name = "violencia10" checked="checked"><label for="violencia2">Algunas veces</label>
        <input type= "radio" id = "violencia3" value = "con-frecuencia" name = "violencia10" checked="checked"><label for="violencia3">Con frecuencia</label>
        <input type= "radio" id = "violencia4" value = "siempre" name = "violencia10" checked="checked"><label for="violencia4">Siempre</label>
        <br>

        <h10>En su centro de trabajo quienes realizan tareas personales para las y los jefes logran privilegios.</h10>
        <input type= "radio" id = "violencia11" value = "nunca" name = "violencia11" checked="checked"><label for="violencia11">Nunca</label>
        <input type= "radio" id = "violencia21" value = "aveces" name = "violencia11" checked="checked"><label for="violencia21">Algunas veces</label>
        <input type= "radio" id = "violencia31" value = "con-frecuencia" name = "violencia11" checked="checked"><label for="violencia31">Con frecuencia</label>
        <input type= "radio" id = "violencia41" value = "siempre" name = "violencia11" checked="checked"><label for="violencia41">Siempre</label>
        <br>

        <h10>En su centro de trabajo todas las personas que laboran obtienen un trato digno y decente.</h10>
        <input type= "radio" id = "violencia12" value = "nunca" name = "violencia12" checked="checked"><label for="violencia12">Nunca</label>
        <input type= "radio" id = "violencia22" value = "aveces" name = "violencia12" checked="checked"><label for="violencia22">Algunas veces</label>
        <input type= "radio" id = "violencia32" value = "con-frecuencia" name = "violencia12" checked="checked"><label for="violencia32">Con frecuencia</label>
        <input type= "radio" id = "violencia42" value = "siempre" name = "violencia12" checked="checked"><label for="violencia42">Siempre</label>
        <br>

        <h10>En su centro de trabajo las valoraciones que se realizan a sus actividades dependen más de la calidad y responsabilidad que de cualquier otra cuestión personal.</h10>
        <input type= "radio" id = "violencia13" value = "nunca" name = "violencia13" checked="checked"><label for="violencia13">Nunca</label>
        <input type= "radio" id = "violencia23" value = "aveces" name = "violencia13" checked="checked"><label for="violencia23">Algunas veces</label>
        <input type= "radio" id = "violencia33" value = "con-frecuencia" name = "violencia13" checked="checked"><label for="violencia33">Con frecuencia</label>
        <input type= "radio" id = "violencia43" value = "siempre" name = "violencia13" checked="checked"><label for="violencia43">Siempre</label>
        <br>

        <h10>En su centro de trabajo, en general hay personas que discriminan, tratan mal o le faltan al respeto a sus compañeras (os), colegas o subordinadas (os)</h10>
        <input type= "radio" id = "violencia14" value = "nunca" name = "violencia14" checked="checked"><label for="violencia14">Nunca</label>
        <input type= "radio" id = "violencia24" value = "aveces" name = "violencia14" checked="checked"><label for="violencia24">Algunas veces</label>
        <input type= "radio" id = "violencia34" value = "con-frecuencia" name = "violencia14" checked="checked"><label for="violencia34">Con frecuencia</label>
        <input type= "radio" id = "violencia44" value = "siempre" name = "violencia14" checked="checked"><label for="violencia44">Siempre</label>
        <br>

        <h10>En su centro de trabajo debido a sus características personales hay personas que sufren un trato inferior o de burla.</h10>
        <input type= "radio" id = "violencia15" value = "nunca" name = "violencia15" checked="checked"><label for="violencia15">Nunca</label>
        <input type= "radio" id = "violencia25" value = "aveces" name = "violencia15" checked="checked"><label for="violencia25">Algunas veces</label>
        <input type= "radio" id = "violencia35" value = "con-frecuencia" name = "violencia15" checked="checked"><label for="violencia35">Con frecuencia</label>
        <input type= "radio" id = "violencia45" value = "siempre" name = "violencia15" checked="checked"><label for="violencia45">Siempre</label>
        <br>

        <h10>En su centro de trabajo las y los superiores reciben un trato mucho más respetuoso que subordinados (as) y personal administrativo.</h10>
        <input type= "radio" id = "violencia16" value = "nunca" name = "violencia16" checked="checked"><label for="violencia16">Nunca</label>
        <input type= "radio" id = "violencia26" value = "aveces" name = "violencia16" checked="checked"><label for="violencia26">Algunas veces</label>
        <input type= "radio" id = "violencia36" value = "con-frecuencia" name = "violencia16" checked="checked"><label for="violencia36">Con frecuencia</label>
        <input type= "radio" id = "violencia46" value = "siempre" name = "violencia16" checked="checked"><label for="violencia46">Siempre</label>
        <br>

        <h10>En su centro de trabajo las y los superiores están abiertos a la comunicación con el personal.</h10>
        <input type= "radio" id = "violencia17" value = "nunca" name = "violencia17" checked="checked"><label for="violencia17">Nunca</label>
        <input type= "radio" id = "violencia27" value = "aveces" name = "violencia17" checked="checked"><label for="violencia27">Algunas veces</label>
        <input type= "radio" id = "violencia37" value = "con-frecuencia" name = "violencia17" checked="checked"><label for="violencia37">Con frecuencia</label>
        <input type= "radio" id = "violencia47" value = "siempre" name = "violencia17" checked="checked"><label for="violencia47">Siempre</label>
        <br>

        <h10>En su centro de trabajo se da un trato inferior o discriminatorio a las personas con los más bajos niveles de sueldo.</h10>
        <input type= "radio" id = "violencia18" value = "nunca" name = "violencia18" checked="checked"><label for="violencia18">Nunca</label>
        <input type= "radio" id = "violencia28" value = "aveces" name = "violencia18" checked="checked"><label for="violencia28">Algunas veces</label>
        <input type= "radio" id = "violencia38" value = "con-frecuencia" name = "violencia18" checked="checked"><label for="violencia38">Con frecuencia</label>
        <input type= "radio" id = "violencia48" value = "siempre" name = "violencia18" checked="checked"><label for="violencia48">Siempre</label>
        <br>

        <h10>En su centro de trabajo existen campañas de difusión internas de promoción de la igualdad laboral y no discriminación.</h10>
        <input type= "radio" id = "violencia19" value = "nunca" name = "violencia19" checked="checked"><label for="violencia19">Nunca</label>
        <input type= "radio" id = "violencia29" value = "aveces" name = "violencia19" checked="checked"><label for="violencia29">Algunas veces</label>
        <input type= "radio" id = "violencia39" value = "con-frecuencia" name = "violencia19" checked="checked"><label for="violencia39">Con frecuencia</label>
        <input type= "radio" id = "violencia49" value = "siempre" name = "violencia19" checked="checked"><label for="violencia49">Siempre</label>
        <br>

        <h10>En su centro de trabajo se toman acciones como: asilamiento de sus compañeras(os), cambio de lugar repentinamente, falta de instrucciones, menosprecio del esfuerzo o propuestas, imposición de tareas sin los medios para realizarlas.</h10>
        <input type= "radio" id = "violencia191" value = "nunca" name = "violencia191" checked="checked"><label for="violencia191">Nunca</label>
        <input type= "radio" id = "violencia291" value = "aveces" name = "violencia191" checked="checked"><label for="violencia291">Algunas veces</label>
        <input type= "radio" id = "violencia391" value = "con-frecuencia" name = "violencia191" checked="checked"><label for="violencia391">Con frecuencia</label>
        <input type= "radio" id = "violencia491" value = "siempre" name = "violencia191" checked="checked"><label for="violencia491">Siempre</label>
        <br>

        <h10>En su centro de trabajo las funciones y tareas se transmiten de manera clara y precisa.</h10>
        <input type= "radio" id = "violencia192" value = "nunca" name = "violencia192" checked="checked"><label for="violencia192">Nunca</label>
        <input type= "radio" id = "violencia292" value = "aveces" name = "violencia192" checked="checked"><label for="violencia292">Algunas veces</label>
        <input type= "radio" id = "violencia392" value = "con-frecuencia" name = "violencia192" checked="checked"><label for="violencia392">Con frecuencia</label>
        <input type= "radio" id = "violencia492" value = "siempre" name = "violencia192" checked="checked"><label for="violencia492">Siempre</label>
        <br>

        <h10>En su centro de trabajo las cargas de trabajo se distribuyen de acuerdo a la responsabilidad del cargo.</h10>
        <input type= "radio" id = "violencia193" value = "nunca" name = "violencia193" checked="checked"><label for="violencia193">Nunca</label>
        <input type= "radio" id = "violencia293" value = "aveces" name = "violencia193" checked="checked"><label for="violencia293">Algunas veces</label>
        <input type= "radio" id = "violencia393" value = "con-frecuencia" name = "violencia193" checked="checked"><label for="violencia393">Con frecuencia</label>
        <input type= "radio" id = "violencia493" value = "siempre" name = "violencia193" checked="checked"><label for="violencia493">Siempre</label>
        <br>

        <h10>Si manifiesto mi preocupación sobre algún asunto relacionado con la igualdad de género o prácticas discriminatorias, se le da seguimiento.</h10>
        <input type= "radio" id = "violencia194" value = "nunca" name = "violencia194" checked="checked"><label for="violencia194">Nunca</label>
        <input type= "radio" id = "violencia294" value = "aveces" name = "violencia194" checked="checked"><label for="violencia294">Algunas veces</label>
        <input type= "radio" id = "violencia394" value = "con-frecuencia" name = "violencia194" checked="checked"><label for="violencia394">Con frecuencia</label>
        <input type= "radio" id = "violencia494" value = "siempre" name = "violencia194" checked="checked"><label for="violencia494">Siempre</label>
        <br>

        <h11>Acoso y hostigamiento</h11><br>
        <br>
        <h10>En su centro de trabajo ha recibido, comentarios sugestivos o sexistas, bromas ofensivas, miradas obscenas o petición de pláticas indeseables relacionadas con asuntos sexuales.</h10>
        <input type= "radio" id = "Acoso1" value = "si" name = "Acoso10" checked="checked"><label for="Acoso1">Si</label>
        <input type= "radio" id = "Acoso2" value = "no" name = "Acoso10" checked="checked"><label for="Acoso2">No</label>
        <br>

        <h10>En su centro de trabajo ha recibido proposiciones o peticiones directas o indirectas para establecer una relación sexual.</h10>
        <input type= "radio" id = "Acoso11" value = "si" name = "Acoso11" checked="checked"><label for="Acoso11">Si</label>
        <input type= "radio" id = "Acoso21" value = "si" name = "Acoso11" checked="checked"><label for="Acoso21">No</label>
        <br>

        <h10>En su centro de trabajo ha vivido contacto físico sexual no deseado.</h10>
        <input type= "radio" id = "Acoso12" value = "si" name = "Acoso12" checked="checked"><label for="Acoso12">Si</label>
        <input type= "radio" id = "Acoso22" value = "no" name = "Acoso12" checked="checked"><label for="Acoso22">No</label>
        <br>

        <h10>En su centro de trabajo se logran recompensas o incentivos laborales a cambio de favores sexuales.</h10>
        <input type= "radio" id = "Acoso13" value = "si" name = "Acoso13" checked="checked"><label for="Acoso13">Si</label>
        <input type= "radio" id = "Acoso23" value = "no" name = "Acoso13" checked="checked"><label for="Acoso23">No</label>
        <br>

        <h10>En su centro de trabajo se reciben amenazas con daños o castigos en caso de no acceder a proporcionar favores sexuales.</h10>
        <input type= "radio" id = "Acoso14" value = "si" name = "Acoso14" checked="checked"><label for="Acoso14">Si</label>
        <input type= "radio" id = "Acoso24" value = "no" name = "Acoso14" checked="checked"><label for="Acoso24">No</label>
        <br>

        <h10>En su centro de trabajo ha recibido represalias sin razón o amenazas con relación a su permanencia en el trabajo.</h10>
        <input type= "radio" id = "Acoso15" value = "si" name = "Acoso15" checked="checked"><label for="Acoso15">Si</label>
        <input type= "radio" id = "Acoso25" value = "no" name = "Acoso15" checked="checked"><label for="Acoso25">No</label>
        <br>

        <h10>En caso de que haya sido víctima de acoso u hostigamiento sexual, en su centro de trabajo resolvieron satisfactoriamente su caso al interior o le canalizaron con las autoridades competentes.</h10>
        <input type= "radio" id = "Acoso16" value = "si" name = "Acoso16" checked="checked"><label for="Acoso16">Si</label>
        <input type= "radio" id = "Acoso26" value = "no" name = "Acoso16" checked="checked"><label for="Acoso26">No</label>
        <br>

        <h10>En caso de ser acosada (o) u hostigada (o) sexual o laboralmente en su centro de trabajo sabe a qué autoridad puede dirigirse para denunciarlo.</h10>
        <input type= "radio" id = "Acoso17" value = "si" name = "Acoso17" checked="checked"><label for="Acoso17">Si</label>
        <input type= "radio" id = "Acoso27" value = "no" name = "Acoso17" checked="checked"><label for="Acoso27">No</label>
        <br>

        <h11>Accesibilidad</h11><br>
        <br>
        <h10>En su centro de trabajo se cuenta con el espacio, mobiliario y equipo adecuado para personas con discapacidad</h10>
        <input type= "radio" id = "Accedibilidad1" value = "nunca" name = "Accedibilidad10" checked="checked"><label for="Accedibilidad1">Nunca</label>
        <input type= "radio" id = "Accedibilidad2" value = "avces" name = "Accedibilidad10" checked="checked"><label for="Accedibilidad2">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad3" value = "con-frecuencia" name = "Accedibilidad10" checked="checked"><label for="Accedibilidad3">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad4" value = "siempre" name = "Accedibilidad10" checked="checked"><label for="Accedibilidad4">Siempre</label>
        <br>

        <h10>Considera que las instalaciones de su centro de trabajo son adecuadas y accesibles para personas con discapacidad (rampas, estacionamiento, sanitarios, oficinas, pasillos, escaleras, elevadores, entre otros)</h10>
        <input type= "radio" id = "Accedibilidad11" value = "nunca" name = "Accedibilidad11" checked="checked"><label for="Accedibilidad11">Nunca</label>
        <input type= "radio" id = "Accedibilidad21" value = "aveces" name = "Accedibilidad11" checked="checked"><label for="Accedibilidad21">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad31" value = "con-frecuencia" name = "Accedibilidad11" checked="checked"><label for="Accedibilidad31">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad41" value = "siempre" name = "Accedibilidad11" checked="checked"><label for="Accedibilidad41">Siempre</label>
        <br>

        <h10>En su centro de trabajo se cuenta con los medios tecnológicos y de comunicación accesible para que cualquier persona con discapacidad desempeñe sus actividades de manera óptima.</h10>
        <input type= "radio" id = "Accedibilidad12" value = "nunca" name = "Accedibilidad12" checked="checked"><label for="Accedibilidad12">Nunca</label>
        <input type= "radio" id = "Accedibilidad22" value = "aveces" name = "Accedibilidad12" checked="checked"><label for="Accedibilidad22">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad32" value = "con-frecuencia" name = "Accedibilidad12" checked="checked"><label for="Accedibilidad32">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad42" value = "siempre" name = "Accedibilidad12" checked="checked"><label for="Accedibilidad42">Siempre</label>
        <br>

        <h10>En su centro de trabajo se contemplan mecanismos o políticas de inclusión laboral para personas con discapacidad, personas adultas mayores o con VIH, entre otras.</h10>
        <input type= "radio" id = "Accedibilidad13" value = "nunca" name = "Accedibilidad13" checked="checked"><label for="Accedibilidad13">Nunca</label>
        <input type= "radio" id = "Accedibilidad23" value = "aveces" name = "Accedibilidad13" checked="checked"><label for="Accedibilidad23">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad33" value = "con-frecuencia" name = "Accedibilidad13" checked="checked"><label for="Accedibilidad33">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad43" value = "siempre" name = "Accedibilidad13" checked="checked"><label for="Accedibilidad43">Siempre</label>
        <br>

        <h10>En su centro de trabajo se utiliza lenguaje incluyente y no sexista.</h10>
        <input type= "radio" id = "Accedibilidad14" value = "nunca" name = "Accedibilidad14" checked="checked"><label for="Accedibilidad14">Nunca</label>
        <input type= "radio" id = "Accedibilidad24" value = "aveces" name = "Accedibilidad14" checked="checked"><label for="Accedibilidad24">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad34" value = "con-frecuencia" name = "Accedibilidad14" checked="checked"><label for="Accedibilidad34">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad44" value = "siempre" name = "Accedibilidad14" checked="checked"><label for="Accedibilidad44">Siempre</label>
        <br>

        <h10>En su centro de trabajo hay un ambiente de respeto y no discriminación hacia las diferencias y preferencias sexuales.</h10>
        <input type= "radio" id = "Accedibilidad15" value = "nunca" name = "Accedibilidad15" checked="checked"><label for="Accedibilidad15">Nunca</label>
        <input type= "radio" id = "Accedibilidad25" value = "aveces" name = "Accedibilidad15" checked="checked"><label for="Accedibilidad25">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad35" value = "con-frecuencia" name = "Accedibilidad15" checked="checked"><label for="Accedibilidad35">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad45" value = "siempre" name = "Accedibilidad15" checked="checked"><label for="Accedibilidad45">Siempre</label>
        <br>

        <h10>En su centro de trabajo ha sido testigo de actos discriminatorios por ser mujer u hombre, por edad, apariencia, discapacidad, entre otros.</h10>
        <input type= "radio" id = "Accedibilidad16" value = "nunca" name = "Accedibilidad16" checked="checked"><label for="Accedibilidad16">Nunca</label>
        <input type= "radio" id = "Accedibilidad26" value = "aveces" name = "Accedibilidad16" checked="checked"><label for="Accedibilidad26">Algunas veces</label>
        <input type= "radio" id = "Accedibilidad36" value = "con-frecuencia" name = "Accedibilidad16" checked="checked"><label for="Accedibilidad36">Con frecuencia</label>
        <input type= "radio" id = "Accedibilidad46" value = "siempre" name = "Accedibilidad16" checked="checked"><label for="Accedibilidad46">Siempre</label>
        <br>

        <h11>Condiciones generales de trabajo</h11><br>
        <br>
        <h10>En su centro de trabajo se proporcionan las prestaciones de ley.</h10>
        <input type= "radio" id = "condiciones1" value = "nunca" name = "condiciones10" checked="checked"><label for="condiciones1">Nunca</label>
        <input type= "radio" id = "condiciones2" value = "aveces" name = "condiciones10" checked="checked"><label for="condiciones2">Algunas veces</label>
        <input type= "radio" id = "condiciones3" value = "con-frecuencia" name = "condiciones10" checked="checked"><label for="condiciones3">Con frecuencia</label>
        <input type= "radio" id = "condiciones4" value = "siempre" name = "condiciones10" checked="checked"><label for="condiciones4">Siempre</label>
        <br>

        <h10>En su centro de trabajo las y los directivos apoyan la igualdad y no discriminación</h10>
        <input type= "radio" id = "condiciones11" value = "nunca" name = "condiciones11" checked="checked"><label for="condiciones11">Nunca</label>
        <input type= "radio" id = "condiciones21" value = "aveces" name = "condiciones11" checked="checked"><label for="condiciones21">Algunas veces</label>
        <input type= "radio" id = "condiciones31" value = "con-frecuencia" name = "condiciones11" checked="checked"><label for="condiciones31">Con frecuencia</label>
        <input type= "radio" id = "condiciones41" value = "siempre" name = "condiciones11" checked="checked"><label for="condiciones41">Siempre</label>
        <br>

        <h10>En su centro de trabajo los mecanismos utilizados para asegurar la igualdad y no discriminación son eficaces.</h10>
        <input type= "radio" id = "condiciones12" value = "nunca" name = "condiciones12" checked="checked"><label for="condiciones12">Nunca</label>
        <input type= "radio" id = "condiciones22" value = "aveces" name = "condiciones12" checked="checked"><label for="condiciones22">Algunas veces</label>
        <input type= "radio" id = "condiciones32" value = "con-frecuencia" name = "condiciones12" checked="checked"><label for="condiciones32">Con frecuencia</label>
        <input type= "radio" id = "condiciones42" value = "siempre" name = "condiciones12" checked="checked"><label for="condiciones42">Siempre</label>
        <br>

        <h10>En su centro de trabajo se recibe un salario igual por igual trabajo sin importar sexo, apariencia, edad u otras características personales.</h10>
        <input type= "radio" id = "condiciones13" value = "nunca" name = "condiciones13" checked="checked"><label for="condiciones13">Nunca</label>
        <input type= "radio" id = "condiciones23" value = "aveces" name = "condiciones13" checked="checked"><label for="condiciones23">Algunas veces</label>
        <input type= "radio" id = "condiciones33" value = "con-frecuencia" name = "condiciones13" checked="checked"><label for="condiciones33">Con frecuencia</label>
        <input type= "radio" id = "condiciones43" value = "siempre" name = "condiciones13" checked="checked"><label for="condiciones43">Siempre</label>
        <br>

        <button>Enviar</button>
    </form>
    
</div>
</body>

</html>
