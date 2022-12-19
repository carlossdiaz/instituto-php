<?php 
    require 'modelo/modelo.php';

    session_start();

    $alumno1 = new Alumno("1", "1", "1", "1", "1");
  
    $alumno2 = new Alumno("2", "2", "2", "2", "2");

    $alumnos = array($alumno1, $alumno2);

    $_SESSION['alumnos'] = $alumnos;
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instituto</title>
</head>
<body>

<h2>Menú</h2>
<p><a href="alumnos/alumnos.php">alumnos</a></p>
<p><a href="asignaturas/asignaturas.php">asignaturas</a></p>

</body>
</html>
