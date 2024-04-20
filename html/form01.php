<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>

<h2>Formulario 1</h2>

<?php
if (isset($_GET['texto']))
{
    $texto=$_GET['texto'];
    echo "texto recibido es: ".$texto. "<br>";
}
else
echo '

<form action="" method="GET">
    <label for="texto">Intruduce u texto:</label>
    <input type="text" id="texto" name="texto">
    <button type="submit">Enviar</button>
</form>';
?>
</body>
</html>
