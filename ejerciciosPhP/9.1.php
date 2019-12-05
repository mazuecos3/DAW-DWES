<html>
<head>
        <meta charset="UTF-8">
        <style type="text/css">
          
                  
          table,tr,td{
            background-color:lightblue;
text-align: center;
border: 1px solid;

}
               
        </style>
    </head>
    <body>
        <table>
        <?php
            $servidor = "localhost"; # Puede ser una IP o un nombre DNS
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            # Crear conexión. Opcionalmente se puede poner como quinto parámetro
            # el puerto
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            # Comprobar conexión
            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";
           
            # A continuación se usa un "SELECT", pero igualmente podría ser
            #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.
            $consulta = "SELECT * FROM empleados";
          
            # A continuación se ejecuta la consulta y se devuelve el resultado
            # en el caso de que se trate de un SELECT. En otro caso devuelve
            # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.
            $result = mysqli_query($conn, $consulta);
           
            # Es preciso iterar para extrar una a una las filas del resultado
            while ($fila = mysqli_fetch_array($result)) {
             
                echo "<tr>";
               
               
                 # Esta es una manera alternativa de mostrar la fila, habida
                 # cuenta de que mysqli_fetch_array devuelve un array
                 # asociativo
                echo "<td>".$fila["DNI"]."</td><td>".$fila["nombre"]."</td>"; //o bien echo $fila[DNI].':'.$fila[nombre];        
                echo "</tr>";
               
            }
       
            mysqli_close($conn);
                                    
        ?>
        </table>
       
    </body>
   
</html>