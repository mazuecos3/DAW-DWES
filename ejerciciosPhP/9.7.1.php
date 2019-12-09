<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $servidor = "localhost";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    $consulta1 = mysqli_connect($servidor, $username, $password, $basedatos);
    
    $DNI = $_GET["DNI"];
    $consulta = 'DELETE FROM empleados WHERE DNI='.$DNI.';';
    $result = mysqli_query($consulta1, $consulta);

    if ($result == TRUE)
    echo "Empleado DELETED<br>";
    else { 
    echo mysqli_error($consulta1);
    die("FALLO");
    }
    ?>
</body>
</html>