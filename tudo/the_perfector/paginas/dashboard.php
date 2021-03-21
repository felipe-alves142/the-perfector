<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/icon" href="../imagens/logo-icon.svg"> 
    <link rel="stylesheet" href="../styles/das.css">    
</head>
<body>
<div id="topdash">
        <ul>
         <li id="cac"><a href="categorias.php" style="text-decoration:none">Categorias</a></li>
        </ul>
        
        <ul id="menu">
        <li><img id="prof" src="../imagens/usuario.png"></li>
        <ul id="subm">
            <?php
                echo "<li><a href='includes/logout.inc.php'>Sair</a></li>";
            ?>
            </ul>    
  </ul>


    <?php
    include_once "includes/footer.php";
    if(isset($_SESSION["userid"])){
        echo "<p id='bvd'>Bem Vindo(a) ".$_SESSION["useruid"]."</p>";
    }
    ?>
    <br>
    </div>

    <ul>
        <li id="re"><a  href="#" style="text-decoration:none" ><img src="../imagens/Recebido (1).png"></a></li>
        <li id="ap"><a  href="#" style="text-decoration:none"><img src="../imagens/aprovados.png"></a></li>
        <li id="fi"><a  href="#" style="text-decoration:none"><img src="../imagens/finalizados.png"></a></li>
        
    </ul>

    
    <a href="#"><img id="chat" src="../imagens/chat.png"></a>
    <a href="pedido.php"><img id="cpe" src="../imagens/cpedido.png"></a>
   
   </body>
</html>