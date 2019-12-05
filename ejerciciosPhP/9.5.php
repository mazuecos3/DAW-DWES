
<html>
    <head>
    </head>
    <body>
        <?php
       
            $DNI = $_GET["DNI"];       
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
               
                $consulta =  "INSERT INTO empleados VALUES ('$DNI','$nombre','$sueldo',2000)";
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