<?php
    require '../modelo/modelo.php';
    session_start();

    $asignaturas = $_SESSION['asignaturas'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de asignaturas</title>
    </head>
    <body>
        <h2>Asignaturas</h2>
        <table>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th><a href="nuevaasignatura.php">Nuevo</a></th>
            </tr>
            <?php
                foreach($asignaturas as $asignatura){
                    echo "<tr>";
                    echo "<td>$asignatura->cod</td>";
                    echo "<td>$asignatura->descripcion</td>";
                    echo "<td><a href=\"asignatura.php?isbn=$asignatura->dni\">editar</a></td>";
                    echo "<td><a href=\"bajaasignatura.php?isbn=$asignatura->dni\">eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <a href="modificarasignatura.php?isbn"></a>
    </body>
</html>