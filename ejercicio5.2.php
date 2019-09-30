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
      


            while ($tabla <=10) {

               
                echo "<tr> ";
                echo"<th> Tabla del $tabla"; 
                $multiplicador = 0;

                while ($multiplicador <= 10) {
                    echo"<th>";    
                    echo "<td>$tabla x $multiplicador = ".$tabla * $multiplicador."</td>";
                    $multiplicador++;    
                    echo"<th>";
                }
                $tabla++;

                echo"</tr>";
              }

           ?>
           
            </table>
           
    </body>
</html>