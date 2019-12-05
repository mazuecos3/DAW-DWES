
<html>
    <head>
    </head>
    <body>
        <?php
            for ($i = 0; $i < count($_FILES["imagen"]["name"]); $i++) {             
                echo "El archivo $i<br>";
                echo "El nombre del fichero es: ".$_FILES["imagen"]["name"][$i]."<br>";
                echo "El tamaño en bytes es: ".$_FILES["imagen"]["size"][$i]."<br>";
                echo "El tipo de archivo es: ".$_FILES["imagen"]["type"][$i]."<br>";
                echo "Se ha guardado en: ".$_FILES["imagen"]["tmp_name"][$i]."<br><br>";    
            }
            
           
            $nombreAlbum = $_POST["nombreAlbum"];       
            $carpeta = './'.$nombreAlbum."/";
            
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }
            for ($i = 0; $i < count($_FILES["imagen"]["name"]); $i++) {            
                $nombreArchivo = "imagen".$i.".jpg";    
                echo "<br>Carpeta= ".$carpeta;
                echo "<br>Ruta= ".$carpeta.$nombreArchivo;           
                move_uploaded_file ( $_FILES["imagen"]["tmp_name"][$i], $carpeta.$nombreArchivo);
            }
 
        ?>
    </body>
</html>