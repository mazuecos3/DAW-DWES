 
 
<html>

<style>

h1 {

background-color: #CFFF96;

}
</style>

    <body>       
        <h1>
            <?php

            $horaActual = date ("g:i:s a");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           

           
            //Con una comilla simple aparece el nombre de la variable en vez de la fecha
            echo 'La hora actual es $horaActual';
           
            ?>   
           
        </h1>
       
    </body>
</html>