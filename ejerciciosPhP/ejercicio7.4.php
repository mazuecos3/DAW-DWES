<html>
<head>
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
    $array = array("perro" => "oveja","jirafa" => "puerco","hola" => "hipopotamo","abeja" => "gato","pera" => "fruta ");
    foreach ($array as $posicion => $item) {
        echo "<p class='texto'Cadena sin modificar:> $item <br></p>";
        $array[$posicion] = ucfirst($array[$posicion]);
        echo "<p class='texto'Cadena sin modificar:>  $array[$posicion] <br></p>";
        echo " <br>";
    }
    ?>
</body>
</html>