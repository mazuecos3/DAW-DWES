<html>  
  <head>
  <meta charset="UTF-8">
</head>
   
<body>
    <?php
    session_start();
    if(!isset($_POST["enviar"])){                              
    $_SESSION["numero"] = "";
    }
    else{                               
    $_SESSION["numero"]=$_SESSION["numero"]."#".$_POST["numero"];
    echo $_SESSION["numero"];                                                                    
}
    ?>

    <form action="11.2.php" method="post">
      <p>Introduce un numero</p>
      <input type="text" name="numero"/>
      <input type="submit" value="enviar" name="enviar"/>
    </form>
    
</body>
    
</html>