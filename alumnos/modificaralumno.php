<?php
    require '../modelo/modelo.php';
    session_start();
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];

    $alumnos = $_SESSION['alumnos'];

    for($i = 0; $i < count($alumnos); $i++){
        if($dni == $alumnos[$i]->idni){
            $alumnos[$i]->dni = $dni;
            $alumnos[$i]->nombre = $nombre;
            $alumnos[$i]->apellido = $apellido;
            $alumnos[$i]->direccion = $direccion;
            $alumnos[$i]->email = $email;
            break;
        }
    }

    $_SESSION['alumnos'] = $alumnos;

    header('Location; alumnos.php');
?>