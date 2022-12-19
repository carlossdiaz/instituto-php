<?php
    require '../modelo/modelo.php';
    session_start();

    $cod = $_GET['cod'];
    $asignatura_match;

    $asignaturas = $_SESSION['asignaturas'];

    foreach($asignaturas as $asignatura){
        if($cod==$asignatura->cod){
            $asignatura_match = $asignatura;
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
        <title>Asignatura</title>
    </head>
    <body>
        
        <form action="modificarasignatura.php" method="post">
            <label for="cod">cod</label>
            <input type="text" name="cod" id="cod" value="">
            <label for="descripcion">descripcion</label>
            <input type="text" name="descripcion" id="descripcion" value="">
            <input type="submit" value="Modificar asignatura">
        </form>
    </body>