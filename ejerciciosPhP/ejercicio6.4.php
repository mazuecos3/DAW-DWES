<html>

    <body>

        <h1>

        <?php

        $cadena = "patata";
        echo $cadena;
        $cadenaFinal= "";
        for ($i=0; $i < strlen($cadena); $i++) {   
            if ( $cadena[$i] == "a") {
                $cadena[$i] = "e";
                $cadenaFinal .= $cadena[$i];
            }else {
                
                $cadenaFinal .= $cadena[$i];
            }
            
          }
          echo "<br>";
          echo $cadenaFinal;
      
        

        
        ?>    
        </h1>

    </body>



</html>
