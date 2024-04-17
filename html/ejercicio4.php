<body>
<?php
    $notas = array();
    for ($i = 0; $i < 10; $i++) {
        $nota = rand(0, 10);
        $notas[] = $nota;
    }
    foreach ($notas as $nota) {
        echo "Nota $nota: ";
        switch ($nota) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "Insuficiente";
                break;
            case 5:
                echo "Suficiente";
                break;
            case 6:
                echo "Bien";
                break;
            case 7:
            case 8:
                echo "Notable";
                break;
            case 9:
            case 10:
                echo "Sobresalientee";
                break;
        }
        echo "</p>";
    }
    ?>
</body>