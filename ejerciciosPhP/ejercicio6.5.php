<html>
    <body>
        <h1>
        <?php
      
        $cadena = "murcielago";
        echo "Cadena normal: $cadena";
        echo "<br>";
        $cadenaFinal= "";
        $cadenaFinal1= "";
        

        for ($i=0; $i < strlen($cadena); $i++) {   
            if ( $cadena[$i] == "a") {
                $cadena[$i] = "e";             
                $cadenaFinal .= $cadena[$i];
                
            } elseif ( $cadena[$i] == "e") {
                $cadena[$i] = "i";              
                $cadenaFinal .= $cadena[$i];
               
            }
            elseif ( $cadena[$i] == "i") {
                $cadena[$i] = "o";
                $cadenaFinal .= $cadena[$i];
            }
            elseif ( $cadena[$i] == "o") {
                $cadena[$i] = "u";
                $cadenaFinal .= $cadena[$i];
            }
            elseif ( $cadena[$i] == "u") {
                $cadena[$i] = "a";  
                $cadenaFinal .= $cadena[$i];
            }
            else {
                $cadenaFinal .= $cadena[$i];
            } 
            
            
          }

          echo "<br>";
          echo "Cadena codificada: $cadenaFinal";
          echo "<br>";

          for ($j=0; $j < strlen($cadenaFinal); $j++) { 
            if ( $cadenaFinal[$j] == "e") {
                $cadenaFinal[$j] = "a";             
                $cadenaFinal1 .= $cadenaFinal[$j];
                
            } elseif ( $cadenaFinal[$j] == "i") {
                $cadenaFinal[$j] = "e";              
                $cadenaFinal1 .= $cadenaFinal[$j];
               
            }
            elseif ( $cadenaFinal[$j] == "o") {
                $cadenaFinal[$j] = "i";
                $cadenaFinal1 .= $cadenaFinal[$j];
            }
            elseif ( $cadenaFinal[$j] == "u") {
                $cadenaFinal[$j] = "o";
                $cadenaFinal1 .= $cadenaFinal[$j];
            }
            elseif ( $cadenaFinal[$j] == "a") {
                $cadenaFinal[$j] = "u";  
                $cadenaFinal1 .= $cadenaFinal[$j];
            }
            else {
                $cadenaFinal1 .= $cadenaFinal[$j];
            } 
          }
        
          echo "<br>";
          echo "Cadena decodificada: $cadenaFinal1";
         
        
            

        
        ?>    
        </h1>

    </body>



</html>
