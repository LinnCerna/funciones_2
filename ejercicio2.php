<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Usuario</h2>
<form method="post">
Nombre completo: <input type="text" name="nombre"><br><br>
Institucion: <input type="text" name="inst"><br><br>
Año de ingreso: <input type="text" name="anio"><br><br>
<input type="submit" value="Generar">
</form>

<?php
    include "funciones2.php";
    if(isset($_POST["nombre"])){
        $usuario = generarUsuario($_POST["nombre"], $_POST["inst"], $_POST["anio"]);
        echo "<br>Tu usuario es: " . $usuario;
    }
?>
<br><br>
<button onclick="location.href='index.php'">Volver</button>
</body>
</html>
