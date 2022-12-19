<?php
    require '../modelo/modelo.php';
    session_start();
    $cod = $_POST['cod'];
    $descripcion = $_POST['descripcion'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];

    $asignaturas = $_SESSION['asignaturas'];

    for($i = 0; $i < count($asignaturas); $i++){
        if($cod == $asignaturas[$i]->cod){
            $asignaturas[$i]->cod = $cod;
            $asignaturas[$i]->descripcion = $descripcion;
            break;
        }
    }

    $_SESSION['asignaturas'] = $asignaturas;

    header('Location; asignaturas.php');
?>