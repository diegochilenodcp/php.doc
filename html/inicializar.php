<!DOCTYPE html>
<html>
<head>
    <title>Lanzamiento de Moneda</title>
</head>
<body>
    <h1>Inicializar</h1>
    
    <?php
    $numeros=array();
    function inicializar_array($n_elementos,$min,$max)
    {
        global $numeros;
        for($i=0;$i<$n_elementos;$i++)
        {
            $numeros[]=rand($min,$max);
        }
    }
    inicializar_array(10,5,50);
    print_r($numeros);
    ?>
    
</body>
</html>
