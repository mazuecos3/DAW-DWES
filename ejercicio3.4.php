
<html>

<style>

h1 {

background-color: #CFFF96;

}
</style>

    <body>       
        <h1>
            <?php

$articulos="10";
           
while ($articulos >0 )
{
    echo "vendiendo un art&iacuteculo...";
    $articulos--;
    echo "Hecho: quedan $articulos en stock. <br>";
}

echo "Nos hemos quedado sin art&iacuteculos.";
       
            ?>   
           
        </h1>
       
    </body>
</html>