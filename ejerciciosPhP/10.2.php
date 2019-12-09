<html>
    <head>
        <meta charset="UTF-8">
    </head>
   
    <body>
        
        <?php
            if (isset($_COOKIE["micookie"])){           
                echo "Hola ".$_COOKIE["micookie"]."<br>";
            }  
            else{
                echo " Pon el nombre en el formulario.<br>"; 
        ?>
            <form action="10.2.php" method="get">
               <p>Nombre: <input type="text" name="nombre"/><input type="submit" name="button" value="enviar"/></p>
            </form>  
        <?php 

        $servidor = "localhost";
        $username = "miusuario";
        $password = "mipassword";
        $basedatos = "bdprueba";
                                                       
        $conn = mysqli_connect($servidor, $username, $password, $basedatos);

        $consultaMaxID = "SELECT max(ID) FROM fi";
           
        $resultadoMaxID = mysqli_query($conn, $consultaMaxID);
                                
        $id=0;
        while ($fila = mysqli_fetch_array($resultadoMaxID) ) {  
                                  
        $id = $fila[0]+1;
        }
        $nombre = $_GET["usuario"];
        $consultaINSERT = "INSERT INTO tabla9 (ID, Nombre) VALUES ($id,'".$nombre."');";

        $result = mysqli_query($conn, $consultaINSERT);
 
        $name="micookie";
    
        $value=$_GET["usuario"];           
        $expires=0;
        $path="/";
        $domain="";
        $secure=false;
        $HttpOnly=true;
        
        setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpeOnly);     
        }
        ?>
    </body>
  
</html>