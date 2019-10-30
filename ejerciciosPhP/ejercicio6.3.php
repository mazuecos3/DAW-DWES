<html>

    <body>

        <h1>

        <?php

        $cadena = "patata";

        for ($i=strlen($cadena); $i >= 0; $i--) { 
            $cadena1 .= $cadena[$i];
          
        }
        echo $cadena1;
        ?>    
        </h1>

    </body>



</html>
