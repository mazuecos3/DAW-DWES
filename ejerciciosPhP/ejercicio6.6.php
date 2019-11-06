<html> 
    <head>
        <link rel="stylesheet" type="text/css" href="ejercicios6.css" media="screen" />
        <meta charset="UTF-8">
        <style>
        .cadena{
    font-family: Verdana,Geneva,sans-serif;
    font-size:30px;
    color : Green;
  
        }
           
        </style>
    </head>
    
    <body>
            <?php
/*
Añada un grado más de dificultad al decodificador, intercambiando parejas de letras consecutivas
*/
//patataea
               $cadena = "patata";
               $cadenaFinal ="";
               $cadenaFinal1 ="";

                echo "<p class='cadena'>Cadena Normal: $cadena</p>" ;
             
                  for ($i = 0 ; $i < strlen($cadena) ; $i++) {
                    if($cadena[$i] == "e") {                     
                        $cadena[$i] = "a";
                        $cadenaFinal .= $cadena[$i];                    
                    }elseif ($cadena[$i] == "i") {
                        $cadena[$i] = "e";  
                        $cadenaFinal .= $cadena[$i];    
                    }
                    elseif ($cadena[$i] =="o") {
                        $cadena[$i] = "i";   
                        $cadenaFinal .= $cadena[$i];   
                    }
                    elseif ($cadena[$i] =="u") {
                        $cadena[$i] = "o";   
                        $cadenaFinal .= $cadena[$i];   
                    }
                    elseif ($cadena[$i] =="a") {
                        $cadena[$i] = "u";   
                        $cadenaFinal .= $cadena[$i];   
                    }else {
                        $cadenaFinal .= $cadena[$i];   
                    }
                }
          
                for ($i = 0 ; $i < strlen($cadena) -1 ; $i++) {
                     $cadenaFinal[$i+1] = $cadenaFinal[$i];
                     
                     $cadenaFinal[$i] = $cadena[$i+1];
                   
                    $i++;
                }          
                echo "<p class='cadena'>Cadena Codificada: $cadenaFinal</p>" ;
                
                for ($j = 0 ; $j < strlen($cadena) ; $j++) {
                    if($cadenaFinal[$j] == "a") {                     
                        $cadenaFinal[$j] = "e";
                        $cadenaFinal1 .= $cadenaFinal[$j];                    
                    }elseif ($cadenaFinal[$j] == "e") {
                        $cadenaFinal[$j] = "i";  
                        $cadenaFinal1 .= $cadenaFinal[$j];    
                    }
                    elseif ($cadenaFinal[$j] =="i") {
                        $cadenaFinal[$j] = "o";   
                        $cadenaFinal .= $cadenaFinal[$j];   
                    }
                    elseif ($cadenaFinal[$j] =="o") {
                        $cadenaFinal[$j] = "u";   
                        $cadenaFinal1 .= $cadenaFinal[$j];   
                    }
                    elseif ($cadenaFinal[$j] =="u") {
                        $cadenaFinal[$j] = "a";   
                        $cadenaFinal1 .= $cadenaFinal[$j];   
                    }else {
                        $cadenaFinal1 .= $cadenaFinal[$j];   
                    }
                }
          
                for ($i = 0 ; $i < strlen($cadenaFinal) -1 ; $i++) {
                    $cadenaFinal1[$i+1] = $cadenaFinal1[$i];
                    
                    $cadenaFinal1[$i] = $cadenaFinal[$i+1];
                  
                   
               }   
               
                echo "<p class='cadena'>Cadena Codificada: $cadenaFinal1</p>" ;
                
            ?>    
    </body>
</html>