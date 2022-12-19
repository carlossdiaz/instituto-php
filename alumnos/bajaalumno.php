<?php
    require '../modelo/modelo.php';
    session_start();

    $dni = $_GET['dni'];

    $alumnos = $_SESSION['alumnos'];

    for($i=0;$i<count($alumnos); $i++){
        if($dni == $alumnos[$i]->dni){
            array_splice($alumnos,$i,1);
            break;
        }
    }

    $_SESSION['alumnos'] = $alumnos;

    header['Location: alumnos.php'];
?>