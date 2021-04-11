<?php
    session_start();
    include("includes/dbh.inc.php");
    $sql="SELECT * FROM pedido WHERE Peid=$codigo;";
    $stmt=mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));
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
    <link rel="stylesheet" href="../styles/dashboar.css">    
</head>
<body>
<div id="topdash">
        <ul>
         <li><a href="display.php" style="text-decoration:none">Explorar</a></li>
         <li><a href="categorias.php" style="text-decoration:none">Categorias</a></li>
        </ul>
        
        <ul id="menu">
        <li><img id="prof" src="../imagens/usuario.png"></li>
        <ul id="subm">
            <?php
              echo "<li><a href='dashboardEmpresa.php'>Empresa</a></li><br>";  
                    
              echo "<li><a href='includes/logout.inc.php'>Sair</a></li><br>";
                
            ?>
            </ul>    
  </ul>


    <?php
          
          include_once "includes/footer.php";
          if(isset($_SESSION["userid"])){
              include_once "includes/functions.inc.php";
              echo "<p id='bvd'>Bem Vindo(a) ".$_SESSION["useruid"]."</p>";
      
              }  
          

    ?>
    <br>
    </div>

    <ul>
        <li id="re"><a   href="#" style="text-decoration:none"><p>Recebidos</p> </a></li>
        <li id="ap"><a  href="#" style="text-decoration:none"> <p>Aprovados</p></a></li>
        <li id="fi"><a  href="#" style="text-decoration:none"><p>Finalizado</p></a></li>
        
    </ul>
    <a href="#"><img id="chat" src="../imagens/chat.png"></a>
    <a href="pedido.php"><img id="cpe" src="../imagens/cpedido.png"></a>
    <br><br>
    
    <?php while($dado = $con -> fetch_array()){?>
        <tr>
            <center>
        <td>Enviado por:<?php echo $dado["pedidoUser"];?></td>
        <td></td>
            </center>
    </tr>
    <?php }?>
    </body>
</html>