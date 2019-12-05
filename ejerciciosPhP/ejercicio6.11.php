<html>

<head>
  <meta charset="UTF-8">

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

  $cadena = "Los perros tienen dos patas pero el gamusino solo tiene una";
  $cadenaFinal = "";
  $palabraClave = " el ";

  $posicionPalabra = strpos($cadena, $palabraClave);

  echo "<p class='texto'>La cadena original es: $cadena</p><br>";

  while ($posicionPalabra) {

    if (!strpos($cadena, $palabraClave)) {

      $posicionPalabra = false;

      $cadena = substr($cadena, $posicionPalabra + 1, strlen($cadena));

      echo ("<p class='texto'>La cadena final es: ".$cadenaFinal.$cadena."</p><br>");
      
    } else {
      $posicionPalabra = strpos($cadena, $palabraClave);

      $cadenaFinal = $cadenaFinal.substr($cadena, 0, $posicionPalabra)." the ";

      $cadena = substr($cadena, $posicionPalabra + 3, strlen($cadena));
    }

  }


  ?>

</body>

</html>