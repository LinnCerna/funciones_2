<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Claves</h2>

<form method="post">
Nombre completo: <input type="text" name="nombre"><br><br>
Fecha de nacimiento: <input type="date" name="fecha"><br><br>
<input type="submit" value="Generar">
</form>

<?php
    include "funciones1.php";
    if(isset($_POST["nombre"])){
        $clave = generarClave($_POST["nombre"], $_POST["fecha"]);
        echo "<br>Tu clave es: " . $clave;
    }
?>
<br><br>
<button onclick="location.href='index.php'">Volver</button>
</body>
</html>