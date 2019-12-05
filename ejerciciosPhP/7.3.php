<html>
   
    <body>
       
        <?php
       
            # Si no hay una pulsación previa, muestra el formulario
           
            if ( !isset ( $_POST["enviar"] ) )
            {

        ?>   
        <form action="7.3.php" method = "POST">
    
           <p>Introduzca contraseña</p>
            <input type="password" value="prueba" name="password">
            <br>
            <br>
            <p>Es usted mayor?</p>
            <input type="radio" value="mayor" name="radio">
            <br>
            <br>
            <p>Eliga coche</p>
            <select name="transporte">

                <option>Coche</option>
                
                <option>Avion</option>
                
                <option>Tren</option>
                
                </select>
            <br>
            <br>   
            <p>Quiere seguro de garantia?</p>
            <input type="checkbox" value="prueba2" name="chexkbox"> 
            <br>
            <br>
            <p>Introduzca el Nombre del vehiculo que quiere</p>
            <input type="text" name="nombre">
            <br>
            <br>
            <p>Pulse aqui para enviar sus datos</p>
            <input type="submit" value="Enviar" name="enviar">
   
        </form>
       
        <?php

        # En caso contrario (es decir, si se ha pulsado antes el botón)...
    }
    else
    {
        
        echo $_POST["password"];
        echo "<br>";
        echo $_POST["radio"];
        echo "<br>";
        echo $_POST["transporte"];
        echo "<br>";
        echo $_POST["chexkbox"];
        echo "<br>";

        if (!empty($_POST ["nombre"]))

        echo $_POST["nombre"];                
        
        else

        echo "Nombre vacio";
            echo "<br>";
         
       
    }
       

   ?> 
       
    </body>
</html>