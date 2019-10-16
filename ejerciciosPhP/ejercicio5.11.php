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
            $pelotaX1= rand (1,$tamañoMapa-1);
            $pelotaY1 = rand (1,$tamañoMapa-1);
            $pelotaX2= rand (1,$tamañoMapa-1);
            $pelotaY2 = rand (1,$tamañoMapa-1);
            
            #Diagonales

            $diagonalX = 1;
            $diagonalY = 1;
            $diagonalX1 = 1;
            $diagonalY1 = 1;
            $diagonalX2 = 1;
            $diagonalY2 = 1;

            #Rebotes

            $rebote=0;

        
            do
            {
  
                if($pelotaY == 0 || $pelotaY + 1 == $tamañoMapa){
                    $diagonalY = $diagonalY *  - 1;
                    $rebotes++;
                }
                if($pelotaX == 0 || $pelotaX + 1 == $tamañoMapa){
                    $diagonalX = $diagonalX * - 1;
                    $rebotes++;
                }
                if($pelotaY1 == 0 || $pelotaY1 + 1 == $tamañoMapa){
                    $diagonalY1 = $diagonalY1 *  - 1;
                    $rebotes++;
                }
                if($pelotaX1 == 0 || $pelotaX1 + 1 == $tamañoMapa){
                    $diagonalX1 = $diagonalX1 * - 1;
                    $rebotes++;
                }
                if($pelotaY2 == 0 || $pelotaY2 + 1 == $tamañoMapa){
                    $diagonalY2 = $diagonalY2 *  - 1;
                    $rebotes++;
                }
                if($pelotaX2 == 0 || $pelotaX2 + 1 == $tamañoMapa){
                    $diagonalX2 = $diagonalX2 * - 1;
                    $rebotes++;
                }
                $pelotaX = $pelotaX + $diagonalX;
                $pelotaY = $pelotaY + $diagonalY;
                $pelotaX1 = $pelotaX1 + $diagonalX1;
                $pelotaY1 = $pelotaY1 + $diagonalY1;
                $pelotaX2 = $pelotaX2 + $diagonalX2;
                $pelotaY2 = $pelotaY2 + $diagonalY2;
                
                
                   
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($i=0; $i<$tamañoMapa; $i++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        if ($x == $pelotaX && $i == $pelotaY){
                            echo '<span class="casa">o</span>'; 
                       
                        }elseif ($x == $pelotaX1 && $i == $pelotaY1) {
                            echo '<span class="casa">o</span>'; 
                        } elseif ($x == $pelotaX2 && $i == $pelotaY2) {
                            echo '<span class="casa">o</span>'; 
                        } else{
                            echo '<span class="aire">.</span>'; 
                        
                    }
                
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>pelotaX=$pelotaX pelotaY=$pelotaY\n";
                echo "</pre>Rebotes:  $rebotes\n</div>";
              
            } while ($rebotes<18);
          
            ?>   
           
        </h1>
       
    </body>

</html>