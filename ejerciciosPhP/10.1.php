<html>
    <head> 
    </head> 
    <body>      
      <?php
            if (isset($_COOKIE["micookie"])){           
                echo "Hola ".$_COOKIE["micookie"]."<br>";
            }  
            else{
                echo " Pon el nombre en el formulario.<br>"; 
        ?>
            <form action="10.1.php" method="get">
               <p>Nombre: <input type="text" name="nombre"/><input type="submit" name="button" value="enviar"/></p>
            </form>  
        <?php        
            $name="micookie";
            $value=$_GET["nombre"];
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