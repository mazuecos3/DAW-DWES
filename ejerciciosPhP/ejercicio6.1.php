<html>
    <body>
      <h1>
        <?php

$year = 1900;

if (strlen($year) == 4 ) {
    echo "<br>";
echo ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 ) ? "$year es bisiesto" : "$year no es bisiesto";
} else {
    echo "ERROR! Pon un numero de 4 cifras";
}
        ?>    
        </h1>
    </body>

</html>