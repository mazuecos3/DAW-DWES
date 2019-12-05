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
   $array = array( "primero"=> 1,"segundo" => 2,"tercero" => 3,"cuarto"  => 4,"quinto" => 5);
   end($array);
   for ($i=0; $i<count($array);$i++) {
       echo "<p class='texto'>".current($array)."</p>";
       echo "<br>";
       prev($array);
   }
?>
</body>
</html>




