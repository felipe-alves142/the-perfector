<?php
    session_start();
    include("includes/dbh.inc.php");
    $nome= strval($_SESSION['useruid']);

    $sql="SELECT * FROM orcamento,pedido WHERE (idOr LIKE Peid) AND pedidoUser = '$nome';";
    
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
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>
<body>
<script>
function mostraPage() {
  var x = document.getElementById("mostre1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
    
   <div id="topdash" style="display:block;">
        <ul>
         <li><a href="display.php" style="text-decoration:none" >Explorar</a></li>
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
        <li id="re"><a   href="#" style="text-decoration:none" onclick="mostraPage()"><p>  Recebidos</p> </a></li>
        <li id="ap"><a   href="#" style="text-decoration:none" > <p>  Aprovados</p></a></li>
        <li id="fi"><a   href="#" style="text-decoration:none" ><p>Finalizado</p></a></li>
        
    </ul>
    <a href="#"><img id="chat" src="../imagens/chat.png"></a>
    <a href="pedido.php"><img id="cpe" src="../imagens/cpedido.png"></a>
    <br><br>
    <div id="mostre1">
    <?php while($dado = $con -> fetch_array()){
     ?>
     
     <?php 
     
     echo "<div  id='meio'><tr ><td >Enviado por:".$dado["userOR"]."</td> <br>";
     echo "<td >Valor:$".$dado['orca']."</td>";
      echo "<a style='position:absolute; top:25px;left:175px;' href='detalhes.php?codigo=$dado[Peid]'>
         
            <img src='../imagens/Vector.png'>       
            <img style='position:absolute; left: 90px; top:70px; height: 50px;' src='../imagens/ant-design_plus-circle-outlined.png'>
  
      </a></div>";
        
     echo " </tr><br>";
    
       
     ?>

        
 
    
    <?php }?>
    </div>


</body>
</html>