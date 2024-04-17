<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENTO</title>
</head>
<body>
    <h1>Documento</h1>
    
    <?php
    //$edades = array("Juan" => "25", "María" => "28", "Paco" => "27");
     
    // foreach ($edades as $clave => $valor) {
     //echo "Clave: " . $clave . " - Valor: " . $valor;
     //echo "<br>";

     $nombres = array("Juan", "María", "Paco", "Pedro", "Jose");
     $edades = array();

     for ($i = 0; $i < 5; $i++) 
     {
         do 
         {
            $edad = rand(20, 80);
         } 
         while ($edad % 2 == 0);
         $edades[$nombres[$i]] = $edad; // Asignar la edad al nombre correspondiente
    }
      
      // Mostrar nombres y edades
    foreach ($edades as $nombre => $edad) 
    {
          echo "Nombre: " . $nombre . " - Edad: " . $edad;
          echo "<br>";
    } 
     ?>
</body>
</html>