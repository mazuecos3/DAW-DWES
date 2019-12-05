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
               
                $consulta = "INSERT INTO empleados2 SELECT * FROM empleados;";
                $result = mysqli_query($conn, $consulta);
  
                if ($result==TRUE)
                    echo "Se ha insertado<br>";
                else{
                    echo mysqli_error($conn);
                    die ("Fallo<br>");
                }  
 
            mysqli_close($conn);
                                     
        ?>
       
    </body>
   
</html>