<html>
    <head>
        <title>
            Simulador de paloma mensajera
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa=10;
            
            # posicionamiento de la pelota random ponemos 1 al principio porque si po0nemos 0 nos puede dar numeros negativos 
            # y no funcionaria.

            $pelotaX= rand (1,$tamañoMapa-1);
            $pelotaY = rand (1,$tamañoMapa-1);
            
        
            $diagonalX = 1;
            $diagonalY = 1;
            $rebotes=0;
           
         
           
            do
            {
  
                if($pelotaY==0 || $pelotaY+1==$tamañoMapa){
                    $diagonalY=$diagonalY*-1;
                    $rebotes++;
                }
                if($pelotaX==0 || $pelotaX+1==$tamañoMapa){
                    $diagonalX=$diagonalX*-1;
                    $rebotes++;
                }
                $pelotaX+=$diagonalX;
                $pelotaY+=$diagonalY;
                
                   
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        if ($x == $pelotaX && $y == $pelotaY){
                            echo '<span class="casa">o</span>'; 
                       
                        }else{
                            echo '<span class="aire">.</span>'; 
                        
                    }
                
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>pelotaX=$pelotaX pelotaY=$pelotaY\n";
                echo "</pre>Rebotes:  $rebotes\n</div>";
              
            } while ($rebotes<6);
          
            ?>   
           
        </h1>
       
    </body>

</html>