<html>
   
    <body>
       
        <form action="7.4.php" method = "GET">    
        <p>Introduzca el primer Valor</p>
            <input type="text" name="numero1" value="">
            <br>
            <br>
            <select name="operador">
                <option value="suma">+</option>    
                <option value="resta">-</option>               
                <option value="division">/</option>
                <option value="multiplicador">*</option>               
            </select>       
            <br>
            <br>
            <p>Introduzca el segundo Valor</p>
            <input type="text" name="numero2" value="">
            <br>
            <br>
            <input type="submit" value="Enviar" name="enviar">
            <br>
            <br>
            <p>Resultado:</p>        
          
        </form>
       
        <?php

       if ($_GET["operador"] == "suma") {
        echo  $resultado = $_GET["numero1"] + $_GET["numero2"]; 
       } elseif ($_GET["operador"] == "resta") {
        echo $_GET["numero1"] - $_GET["numero2"]; 
       } elseif ($_GET["operador"] == "division") {
        echo $_GET["numero1"] / $_GET["numero2"]; 
       } elseif ($_GET["operador"] == "multiplicador") {
        echo $_GET["numero1"] * $_GET["numero2"]; 
       }             
   ?> 
       
    </body>
</html>