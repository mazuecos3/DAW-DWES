<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
            if (isset($_COOKIE["micookie"])){
                
                echo "Hola ".$_COOKIE["micookie"];        
            } 
            else{
                echo "La cookie no se ha devuelto porque no existe cookie, así que rellena el USUARIO.<br><br>"; 
        ?>

            <form action="10.2.php" method="post">     
                <label>Usuario:</label>
                <input type="text" name="nombre"/>
                <input type="submit" name="button" value="Crear Usuario"/>
            </form>
        <?php  
        $servidor = "localhost";
        $username = "miusuario";
        $password = "mipassword";
        $basedatos = "bdprueba";
                                
        $conn = mysqli_connect($servidor, $username, $password, $basedatos);     
        $consultaMaxID = "SELECT max(id) FROM identificadores";
                                          
        $resultadoMaxID = mysqli_query($conn, $consultaMaxID);
                                       
        $id=0;
        while ($fila = mysqli_fetch_array($resultadoMaxID) ) { 
        $id = $fila[0]+1;
        }
                                                       
        $nombre = $_POST["nombre"];

        $consultaINSERT = "INSERT INTO identificadores (id, nombre) VALUES ($id,'".$nombre."');";                  
        $result = mysqli_query($conn, $consultaINSERT);
 
        $name="micookie";   
        $value=$_POST["nombre"];  
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