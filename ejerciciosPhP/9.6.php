
<html>
    <head>
    </head>
    <body>
        <?php
       
         
            $nombre = $_GET["nombre"];
            $sueldo = $_GET["sueldo"];
            
           

            $servidor = "localhost";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";  
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);
 
          
            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";

                $consultaMaximo = "SELECT MAX(DNI) FROM empleados";
                $max = mysqli_query($conn, $consultaMaximo);

                $fila = mysqli_fetch_array($max);
                $total = $fila[0]+1;

                $consulta =  "INSERT INTO empleados VALUES ('$total','$nombre','$sueldo',2000)";
                $result = mysqli_query($conn, $consulta);
  
                if ($result==TRUE)
                    echo "Se ha insertado los campos correctamente<br>";
                else{
                    echo mysqli_error($conn);
                    die ("Fallo<br>");
                }  

            mysqli_close($conn);
          
 
        ?>
    </body>
</html>