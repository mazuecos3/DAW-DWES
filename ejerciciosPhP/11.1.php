<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <?php
           session_start();
           $_SESSION["usuario"] = $_POST["nombre"];
            if (!isset($_SESSION["usuario"])){
        ?>     
            <form action="11.1.php" method="post">
            <p>Introduce tu nombre:</p>
            <input type="text" name="nombre"/>
            <input type="submit" name="enviar" value="Enviar"/>
            </form>    
        <?php
            }    
            else{
              echo "Buenas ".$_SESSION["usuario"];  
            }
        ?> 
    </body>
</html>