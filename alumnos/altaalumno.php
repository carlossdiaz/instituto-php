<?php
    require '../modelo/modelo.php';
    session_start();

    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];

    $alumnos = $_SESSION['alumnos'];

    $alumno = new Alumno($dni, $nombre, $apellido, $direccion, $email);
    array_push($alumnos, $alumno);

    $_SESSION['alumnos'] = $alumnos;

    header('Location: alumnos.php');
?>