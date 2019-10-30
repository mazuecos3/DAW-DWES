
<html>

<style>

h1 {

background-color: #CFFF96;

}
</style>

    <body>       
        <h1>
            <?php

$horaActual = date ("G:i:s ");
// "G, i, s" indican que la salida sea en horas, minutos y segundos. 
// La G mayúscula lo que hace el formato de 24 horas de una hora sin ceros iniciales

echo "La hora actual es $horaActual <br><br>";

if ($horaActual >= 6 &&  $horaActual <= 12 ) {
    echo"Buenos días";

} elseif($horaActual >= 12 && $horaActual <= 20)  {
    echo"Buenas tardes";
    
}elseif ($horaActual >= 20 && $horaActual <= 6 ) {
   echo"Buenas noches";
}

            ?>   
           
        </h1>
       
    </body>
</html>