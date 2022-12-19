<?php
    require '../modelo/modelo.php';
    session_start();

    $cod = $_GET['cod'];

    $asignaturas = $_SESSION['asignaturas'];

    for($i=0;$i<count($asignaturas); $i++){
        if($cod == $asignaturas[$i]->cod){
            array_splice($asignaturas,$i,1);
            break;
        }
    }

    $_SESSION['asignaturas'] = $asignaturas;

    header['Location: asignaturas.php'];
?>