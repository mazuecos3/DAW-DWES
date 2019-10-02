<html>
    <head>
       <style>
    table,tr,td{

        text-align: center;
        border: 1px solid;
        background-color: lightgrey;
       
    }
    
    
    td:nth-child(odd){
        background-color:lightblue;
    }
    td:nth-child(even){
        background-color:lightgreen;
}
    
       </style>
    </head>
    <body>
       
           <table>
             
            <?php
        
        $tabla = 1;
      


          do  {

               
                echo "<tr> ";
                echo"<th> Tabla del $tabla"; 
                $multiplicador = 0;

                do {
                    echo"<th>";    
                    echo "<td>$tabla x $multiplicador = ".$tabla * $multiplicador."</td>";
                    $multiplicador++;    
                    echo"<th>";
                } while ($multiplicador <= 10);
                $tabla++;
               
                echo"</tr>";
              }
              while ($tabla <=10) 

           ?>
           
            </table>
           
    </body>
</html>