<html>
    <body>
        <?php
            $servidor = "localhost";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";  
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);
 
          
            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";
               
                $consulta = "UPDATE empleados SET sueldo = ROUND( sueldo * 1.10, 2 );";
                $result = mysqli_query($conn, $consulta);
  
                if ($result==TRUE)
                    echo "Se ha incrementado en un 10%<br>";
                else{
                    echo mysqli_error($conn);
                    die ("Fallo<br>");
                }  

            mysqli_close($conn);
                                     
        ?>
       
    </body>
   
</html>