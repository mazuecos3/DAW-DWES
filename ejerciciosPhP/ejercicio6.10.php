<html>
<head>
<style>
    .texto{
    font-family: Verdana,Geneva,sans-serif;
    font-size:30px;
    color : Green;
    }
</style>
</head>

<body>
    <?php
    $cadena = "oscar3mmm@gmail.com";
    $aux = "";
    $aux2 = "";
    if (strpos($cadena, "@")) {
        $comprobarArroba = true;
    } else {
        $comprobarArroba = false;
    }
    echo "<p class='texto'>La cadena es: $cadena</p> <br>";
    $posicion = strpos($cadena, "@");
    if ($comprobarArroba) {
        $aux2 = substr($cadena, 0, $posicion);

        echo "<p class='texto'>Sin Modificar: $aux2</p> <br>";

        $aux = strstr($cadena, "@");

        $aux = substr($aux, 1, strlen($aux));

        echo "<p class='texto'>Modificada: $aux</p> <br>";

    }
?>
</body>
</html>