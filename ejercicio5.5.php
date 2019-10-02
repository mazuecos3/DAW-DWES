<html>
    <head>
       <style>

    table,tr,td{

        text-align: center;
        border: 1px solid;
    }

    
       </style>
    </head>
    <body>
       
           <table>
            
             
            <?php
        
            $numero=0;
            
           for ($numero = 0; $numero<11; $numero++ ){
             
             
                   echo "<tr>";
                   
              
                   echo " <td>$numero</td> ";
                   
                    // Comprobar si es Par
                        if($numero%2 == 0 && $numero !=0){
                           echo "<td>si es par</td>";
                        }
                        else{
                           echo "<td>no es par</td>";
                        }
                   
                // Comprobar si es Primo
                   
                   for($b=1; $b < $numero; $b++){
                     
                          if($numero % $b == 0){
                                $primo++;
                            }
                    }

                    if($primo >= 2 ){
                        echo "<td>no es primo</td>";
                    } else {
                        echo "<td>si es primo</td>";
                    }
                   
                    $primo=0;
               
             
                   echo "</tr>";
                   
          
           }
           
           ?>
           
            </table>
           
    </body>
</html>