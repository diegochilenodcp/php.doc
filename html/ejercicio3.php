<!DOCTYPE html>
<html>
<head>
    <title>Lanzamiento de Moneda</title>
</head>
<body>
    <h1>Simulación de Lanzamiento de Moneda</h1>
    
    <?php
    // Generar un número aleatorio: 0 para cara, 1 para cruz
    $resultado = rand(0, 1);

    // Determinar qué imagen mostrar
    if ($resultado == 0) {
        echo "<p>¡Es cara!</p>";
        echo '<img src="cara.svg">';
    } else {
        echo "<p>¡Es cruz!</p>";
        echo '<img src="cruz.svg">';
    }
    ?>
    
</body>
</html>
