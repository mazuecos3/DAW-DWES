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
               
                $consulta = "UPDATE empleados SET plus = 10000;";
                $result = mysqli_query($conn, $consulta);
  
                if ($result==TRUE)
                    echo "Se ha insertado 10000<br>";
                else{
                    echo mysqli_error($conn);
                    die ("Fallo<br>");
                }  

            mysqli_close($conn);
                                     
        ?>
       
    </body>
   
</html>