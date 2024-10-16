<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");

//Captura datos desde el Form anterior
$vIdCiudad = $_POST['idCiudad'];
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vMetro = $_POST['tieneMetro'];

//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', tieneMetro = '$vMetro' where idCiudad='$vIdCiudad'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La ciudad fue Modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");

// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>