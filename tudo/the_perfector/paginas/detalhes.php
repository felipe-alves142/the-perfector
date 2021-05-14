<?php
    include('includes/dbh.inc.php');
    if(isset($_GET['codigo'])){
      $codigo= $_GET['codigo'];
    $sql="SELECT * FROM pedido WHERE Peid = $codigo;";
    $stmt= mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));
    require_once "includes/functions.inc.php";
    session_start();
    $_SESSION['co']=$codigo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon"> 
    <link rel="stylesheet" href="../styles/detalhes.css"> 
    <title>Detalhes</title>
</head>

<body>
 
<?php }?>
      <?php while($dado = $con -> fetch_array()){ ?>
        <h3 style="
    position: relative;
    top: 100px;
    left: 550px;"
    >Orçamento do pedido</h3>
      <div>
       <h5>Enviador Por:<?php echo $dado['pedidoUser'];?></h5>
       <h5>Valor Proposto:<?php echo $dado['orcamento'];?></h5>
       <h5>Categoria:</h5>
       <h5 id="detalhe">Detalhes:<?php echo $dado['descricao'];?></h5>
       <img  src='../imagens/Vector (1).png' 
                  style='position:absolute; 
                  height: 200px; 
                  left:335px; top:60px; '>
              
      </div>

    <a href="includes/detalhes.inc.php?status=Reprovado" style="text-decoration:none;"> <button class="rejeitar">Rejeitar</button> </a> 
     <a href="includes/detalhes.inc.php?status=Aprovado" style="text-decoration:none;"><button class="aprovar">Aprovar</button></a>   
      <?php }?>
</body>
</html>