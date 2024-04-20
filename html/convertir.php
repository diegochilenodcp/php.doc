<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Países y Capitales</title>
</head>
<body>
        <?php
        // Definir el array asociativo
        $paises = array
        (
            "Italy"=>"Rome", 
            "Luxembourg"=>"Luxembourg", 
            "Belgium"=> "Brussels", 
            "Denmark"=>"Copenhagen", 
            "Finland"=>"Helsinki", 
            "France" => "Paris", 
            "Slovakia"=>"Bratislava", 
            "Slovenia"=>"Ljubljana", 
            "Germany" => "Berlin", 
            "Greece" => "Athens", 
            "Ireland"=>"Dublin", 
            "Netherlands"=>"Amsterdam", 
            "Portugal"=>"Lisbon", 
            "Spain"=>"Madrid", 
            "Sweden"=>"Stockholm", 
            "United Kingdom"=>"London", 
            "Cyprus"=>"Nicosia", 
            "Lithuania"=>"Vilnius", 
            "Czech Republic"=>"Prague", 
            "Estonia"=>"Tallin", 
            "Hungary"=>"Budapest", 
            "Latvia"=>"Riga", 
            "Malta"=>"Valetta", 
            "Austria" => "Vienna", 
            "Poland"=>"Warsaw"
        );

        function convertirMayusculas($array) 
        {
            $resultado = array();
            foreach ($array as $pais => $capital) 
            {
                $resultado[strtoupper($pais)] = strtoupper($capital);
            }
            return $resultado;
        }
        $array_paises_mayusculas = convertirMayusculas($paises);
        ksort($array_paises_mayusculas);

        foreach ($array_paises_mayusculas as $pais => $capital) 
        {
            echo "La capital de $pais es $capital\n";
        }

        $array_paises_mayusculas = convertirMayusculas($paises);
        $numero_aleatorio = rand(1, count($array_paises_mayusculas));
        $indice_aleatorio = array_keys($array_paises_mayusculas)[$numero_aleatorio - 1];
        $capital_aleatoria = $array_paises_mayusculas[$indice_aleatorio];

        echo "$numero_aleatorio La capital de $indice_aleatorio es $capital_aleatoria\n";
        ?>
</body>
</html>
