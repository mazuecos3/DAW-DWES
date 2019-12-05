<html>
<head>
<meta charset="UTF-8">
<style>
        .texto {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 30px;
            color: Green;
        }
    </style>
</head>
<body>
<?php
    $array = array( "primero" => "primero","segundo" => "segundo","tercero" => "tercero","cuarto"  => "cuarto","quinto" => "quinto");

    for ($i=0;$i<count($array);$i++) {

         $elemento = each($array);       
         echo "<p class='texto'>Cadena normal: ".$elemento["value"]."</p>";
       

         $elemento["value"] = ucfirst($elemento["value"]);
         echo "<p class='texto'>Cadena modificada: ".$elemento["value"]."</p>";
         echo "<br>";
        
    }
?>
</body>
</html>