<!DOCTYPE HTML>
<head>

    <meta charset="iso-8859-1">
    
</head>

<?php

include ("../../../resources/conexion.php");

$nombre = $_POST["nombre"];

session_start();

$usuario = $_SESSION['nombre'];

$valor = str_replace(",",".",$_POST["valor"]);

$query = mysqli_query($link, "INSERT INTO notas(nombre_asignatura, nota_asignatura, user) VALUES ('$nombre','$valor', '$usuario')");

header("Location: ../../../index.php?m=0");

?>