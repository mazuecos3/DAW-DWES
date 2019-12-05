<html>
<head>
<meta charset="UTF-8">
<style>
        .texto {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 30px;
            color: Green;
        }
    </style>
</head>
<body>
    <?php

    $libro1 = array("titulo" => "Don Quijote","autor"  => "Cervantes", "fecha"  => 1615);
    $libro2 = array( "titulo" => "El hobbit", "autor"  => "Tolkien","fecha"  => 1937 );

    $biblioteca = array("lib1" => $libro1, "lib2" => $libro2);
    foreach ($biblioteca as $libro => $detalles) {
    echo "<p class='texto'>$libro</p>";
    echo "<br>";
    foreach ($detalles as $indice => $valor) {
    echo "<p class='texto'>$indice:$valor</p>";
    }
    echo "<br>";
    }
    ?>
</body>
</html>