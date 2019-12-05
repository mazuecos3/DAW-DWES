<html>
    <body>
        <?php
           
            echo $_POST["password"];
            echo "<br>";
            echo $_POST["radio"];
            echo "<br>";
            echo $_POST["transporte"];
            echo "<br>";
            echo $_POST["chexkbox"];
            echo "<br>";

            if (!empty($_POST ["nombre"]))

            echo $_POST["nombre"];                
            
            else

            echo "Nombre vacio";
                echo "<br>";
             

        ?>
    </body>
</html>