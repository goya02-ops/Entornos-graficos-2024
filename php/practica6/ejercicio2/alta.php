<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuario</title>
</head>
<body>
<?php 
include("conexion.inc");

//Captura datos desde el Form anterior
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vMetro = $_POST['metro'];

//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT ciudad as ciudad FROM ciudades WHERE ciudad like '$vCiudad'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantUsuarios = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);

if ($vCantUsuarios != null){
 echo ("La ciudad ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}

else {
    $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
    values ('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie', '$vMetro')";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    echo("La ciudad ha sido registrada<br>");
    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");

    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
}

// Cerrar la conexion
mysqli_close($link); 
?>
</body>
</html>