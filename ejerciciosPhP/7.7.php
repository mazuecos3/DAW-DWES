
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
             if ($_GET["nombre"] == null ){
                header ( "Location: 7.7.html");
                exit;    
             }
             else{
                header ( "Location: agradecimiento.html");
                exit;    
             }
            
            
        ?>
    </body>
</html>
