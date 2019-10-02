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
            
          do{
             
             
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
                    $b = 1;
                   do{
                     
                          if($numero % $b == 0){
                                $primo++;
                            }
                    $b++;  
                    }
                    while($b < $numero);
                 
             
                    if($primo >= 2 ){
                        echo "<td>no es primo</td>";
                    } else {
                        echo "<td>si es primo</td>";
                    }
                   
                    $primo=0;
               
             
                   echo "</tr>";
                   
            $numero++;
           }
           while ($numero<11);
           ?>
           
            </table>
           
    </body>
</html>