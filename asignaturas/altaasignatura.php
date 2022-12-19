<?php
    require '../modelo/modelo.php';
    session_start();

    $cod = $_POST['cod'];
    $descripcion = $_POST['descripcion'];

    $asignaturas = $_SESSION['asignaturas'];

    $asignatura = new Asignatura($cod, $descripcion);
    array_push($asignaturas, $asignatura);

    $_SESSION['asignaturas'] = $asignaturas;

    header('Location: asignaturas.php');
?>