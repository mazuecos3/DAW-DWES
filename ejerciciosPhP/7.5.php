<html>

<body>

    <?php

    if (!isset($_POST["hiden"])) {

?>


        <form action="7.5.php" method="POST">
            <label for="">Nombre:</label>
            <input type="text" name="nombre" required>
            <input type="hidden" name="hiden" value="0"> 
            <input type="submit" name="submit" id="submit">
        </form>


    <?php


    } else if($_POST["hiden"]==0) {
        $nombre = $_POST["nombre"];
?>

        <form action="7.5.php" method="POST">

            <label for="">Modelo de coche:</label>
            <input type="text" name="coche" id="coche">
            <input type="hidden" name="hiden" value="1">
            <input type="hidden" name="nombreOculto" value="<?php  echo $nombre ?>">
            <input type="submit" name="submit" id="submit">
        </form>
    <?php
    } else if($_POST["hiden"]==1) {
        $nombre = $_POST["nombreOculto"];
        $coche = $_POST["coche"];      
       echo "Buenos días ".$nombre." tu coche es: ".$coche ;
        
    }
?>
</body>
</html>