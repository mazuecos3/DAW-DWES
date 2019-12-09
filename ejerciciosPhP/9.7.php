<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
    <form action="9.7.1.php" method="get">
        <?php
        $servidor = "localhost";
        $username = "miusuario";
        $password = "mipassword";
        $basedatos = "bdprueba";

        $consulta1 = mysqli_connect($servidor, $username, $password, $basedatos);
        if (!$consulta1) {
            die("Conexi&ocacuten fallida:".mysqli_connect_error());
        }
        $consulta = "SELECT * FROM empleados";
        $result = mysqli_query($consulta1, $consulta);
        ?>
        <p>Borrar:  <select name="DNI"></p>
      
            <?php
            foreach ($result as $i) {
        echo '<option value="'.$i['DNI'].'">';
            echo $i['nombre'];
        echo '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Borrar"><br><br>
        <a href="http://localhost/DWES/9.6.html">Añadir Empleados.</a>
    </form>
</body>

</html>