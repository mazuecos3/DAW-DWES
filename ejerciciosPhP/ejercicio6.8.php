<html>
   
    <head>
        <link rel="stylesheet" type="text/css" href="ejercicios6.css" media="screen" />
        <meta charset="UTF-8">

<style>
        .texto{
    font-family: Verdana,Geneva,sans-serif;
    font-size:30px;
    color : Green;
  
        }
        
        table,td{

text-align: center;
border: 3px solid green;
}
        </style>
    </head>
 
    <body>
 
 
 
            <?php



$cadena = "tocar";
$cadena2 = "";
$cadena3 = "";
$longitudCadena = strlen($cadena);

echo "<p class='texto'>Cadena: $cadena<br></p>";


for($i=0; $i<$longitudCadena; $i+= 2) {
    $cadena2 = substr($cadena, $i, 2);
    $cadena3 .= $cadena2[1].$cadena2[0];
    
  
   
}
 
echo "<p class='texto'>Cadena Retocada : $cadena3<br></p>"
             
            ?>    
    </body>
</html>





