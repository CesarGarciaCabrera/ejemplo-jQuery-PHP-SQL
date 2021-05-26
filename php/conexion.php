<?php

	include("db.php");


$pan = $_POST["pan"];
$ingredientes = $_POST["ingredientes"];
$papas = $_POST["papas"];
$bebidas = $_POST["bebidas"];

$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];


$query = "INSERT INTO compra
            (pan,ingredientes,papas,bebidas, nombre, direccion, telefono, total) VALUES('$pan','$ingredientes','$papas','$bebidas', '$nombre', '$direccion', '$telefono', '200')";

$result = mysqli_query($conexion, $query);

    echo'<script type="text/javascript">
    alert("Se hizo la compra");
    window.location.href="../index.php";
    </script>';

?>