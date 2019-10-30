<html>
    <head>
       <style>
    table,tr,td{
      
        color:Black;
        font-size:40px;
        text-align: center;
        border: 1px solid;
        background-color: lightgreen;
        margin-left:50%;
       
    }
       </style>
    </head>
    <body>

           <table>
             
            <?php
        $n1 = 0;
        $n2 = 1;
        echo"<tr>";
        for ($i = 0; $i < 10; $i++){  

        $suma = $n1 + $n2; 

        $n1 = $n2;    
        $n2 = $suma;
        
        echo "<th>$suma<th>";
        echo"</tr>";
        
        }
        
       
           ?>
           
            </table>
           
    </body>
</html>