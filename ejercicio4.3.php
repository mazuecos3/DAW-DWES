 

<html>

<style>

h1 {

background-color: #CFFF96;

}
</style>

    <body>       
        <h1>
            <?php

        $year = 1900;

        echo ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 ) ? "$year es bisiesto" : "$year no es bisiesto";

      
            ?>   
           
        </h1>
       
    </body>
</html>
