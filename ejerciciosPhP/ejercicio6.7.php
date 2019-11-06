<html> 
    <head>
        <link rel="stylesheet" type="text/css" href="ejercicios6.css" media="screen" />
        <meta charset="UTF-8">
        <style>
        .texto{
    font-family: Verdana,Geneva,sans-serif;
    font-size:30px;
    color : Green;
  
        }
        
        table,td{

text-align: center;
border: 3px solid green;
}
        </style>
    </head>
    
    <body>
    <table>
    <?php
/*
Elabore un script que cuente el número de 'a', 'b', 'c'... que hay en un texto y muestre el resultado en una tabla con CSS.
*/

                $letras =["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z"];
                
                $texto = "<p class='texto'>las cantinas como cantan como bialan han olvidado a que huele la luna, el dia es claro ha salido solo </p>";
                $contadorLetras = 0;
                
    
                echo($texto. "<br>");
            
              
               
                
                for ($i = 0; $i < count($letras); $i++) {
                        for ($j = 0; $j < strlen($texto); $j++) {
                            if($letras[$i] == $texto[$j]){
                                $contadorLetras++;
                            }
                            
                        }
                        echo("<tr>");
                        echo ("<td>".$letras[$i]. "</td>");
                        echo ("<td>".$contadorLetras. "</td>");
                        echo("</tr>");
              
                $contadorLetras=0;
              
                }
              
              
               
   

            ?>    
  </table>
    </body>
   
</html>