<?php
    include('includes/dbh.inc.php');
    if(isset($_GET['codigo'])){
      $codigo= $_GET['codigo'];
    $sql="SELECT * FROM pedido WHERE Peid = $codigo;";
    $stmt= mysqli_stmt_init($conn);
    $query= mysqli_query($conn,$sql) or die(mysqli_error($conn));
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
    <link rel="stylesheet" href="../styles/ma.css">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon"> 
    <title>Mais</title>
</head>
<body>
 <br><br><br>
 <div id='conte'>
   <h1>Pedido</h1>
   <?php while($dado= $query -> fetch_array()){;?>
         <h6>Descrição:</h6> 
         <?php echo $dado['descricao'];?> <br>
        <h6> Cliente:</h6><?php echo  "<p id='user'>".$dado['pedidoUser'].'</p>';?>
        <br>
         <?php echo $dado['titulo'];?></tr>
         <h6>Categoria: </h6>
         <?php echo $dado['categoria'];?></tr> 
         <h6>Valor: </h6>
         <?php echo $dado['orcamento'];?>
   </div>
        
    
    <div id='part2'>
    
    <form action="includes/mais.inc.php" method='post'>
    Envie um orçamento para o cliente <br> <br>
    Valor: <br>
    <input type="number" name="muorca"> <br>
    Detalhes Da Proposta: <br>
    <textarea name='dec2' style="width: 200px; height: 100px;"></textarea> <br>
    Data Para Conclusão: <br>
    <input type="date"> <br>

    
    <input type="submit" name="submit" value="Enviar">
    </form>
      <?php }?>
      <?php }?>
     
    </div>
</body>
</html>