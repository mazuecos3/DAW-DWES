
<html>

<style>

h1 {

background-color: #CFFF96;

}
</style>

    <body>       
        <h1>
            <?php


            $horaActual = date ("g:i:s a d:m:y ");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm

            // "d, m, y" indican el dia mes y año que viene de el ingles day,month, year

            //con una comilla aparece el nombre de la variable
           
            echo "La hora actual es $horaActual";
           
            ?>   
           
        </h1>
       
    </body>
</html>