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
        
         for ($tabla =1;$tabla <=10; $tabla++) {

               
                echo "<tr> ";
                echo"<th> Tabla del $tabla"; 

                
               
                for ( $multiplicador = 0;$multiplicador <= 10 ;$multiplicador++) {
                    echo"<th>";    
                    echo "<td>$tabla x $multiplicador = ".$tabla * $multiplicador."</td>";
                     
                    echo"<th>";
                }
               

                echo"</tr>";
              }

           ?>
           
            </table>
           
    </body>
</html>