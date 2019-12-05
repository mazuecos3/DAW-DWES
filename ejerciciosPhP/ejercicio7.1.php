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
    $array = array(1, 2, 3, 4, 5);
    for ($i=count($array);$i>=0;$i--) {
        echo "<p class='texto'>".$array[$i]."</p>";
        echo "<br>";
    }
    
    ?>
</body>
</html>