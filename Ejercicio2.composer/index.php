<?php

    require __DIR__ '/vendor/autoload.php';
    use Egibide\Paciente;

    if(isset($_GET['accion'])){

        $paciente = new Paciente('Juan', 'Gonzalez', 28);

        if($_GET['accion'] == 'enfermar'){
            $paciente -> enfermar();
        }

        if($_GET['accion'] == 'curar'){
            $paciente -> curar();
        }
    }
?>

//fuera de php porq esto es html como me va a salir en a vista 
<h1>Paciente</h1>
<a href="index.php?accion=enfermar">Enfermar</a> // tengo q poner q sea enlace llamadno a su php
<a href="index.php?accion=curar">Curar</a>