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

        $cadena = "oscar3mazuecos@hotmail.com";

        echo "<p class='texto'>$cadena<br>";
       if (substr($cadena, -4, 4) && strstr($cadena,".com")) {
        echo "<p class='texto'>Este correo electronico si que contiene: .com<br>";
       }else {
        echo "<p class='texto'>Este correo electronico no que contiene: .com<br>";
       }
      
             
            ?>    
    </body>
</html>





