<?php
    require '../modelo/modelo.php';
    session_start();

    $alumnos = $_SESSION['alumnos'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos</title>
    </head>
    <body>
        <h2>Alumnos</h2>
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Email</th>
                <th><a href="nuevoalumno.php">Nuevo</a></th>
            </tr>
            <?php
                foreach($alumnos as $alumno){
                    echo "<tr>";
                    echo "<td>$alumno->dni</td>";
                    echo "<td>$alumno->nombre</td>";
                    echo "<td>$alumno->apellido</td>";
                    echo "<td>$alumno->direccion</td>";
                    echo "<td>$alumno->email</td>";
                    echo "<td><a href=\"alumno.php?dni=$alumno->dni\">editar</a></td>";
                    echo "<td><a href=\"bajaalumno.php?dni=$alumno->dni\">eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <a href="modificaralumno.php?dni"></a>
    </body>
</html>