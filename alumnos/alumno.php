<?php
    require '../modelo/modelo.php';
    session_start();

    $dni = $_GET['dni'];
    $alumno_match;

    $alumnos = $_SESSION['alumnos'];

    foreach($alumnos as $alumno){
        if($dni==$alumno->dni){
            $alumno_match = $alumno;
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alumno</title>
    </head>
    <body>
        
        <form action="modificaralumno.php" method="post">
            <label for="dni">dni</label>
            <input type="text" name="dni" id="dni" value="">
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" id="nombre" value="">
            <label for="apellido">apellido</label>
            <input type="text" name="apellido" id="apellido" value="">
            <label for="direccion">direccion</label>
            <input type="text" name="direccion" id="direccion" value="">
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="">
            <input type="submit" value="Modificar alumno">
        </form>
    </body>