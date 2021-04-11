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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php while($dado= $query -> fetch_array()){;?>
    <td>
        <tr> <?php echo $dado['Peid'];?></tr> <br>           
        <tr> <?php echo $dado['titulo'];?></tr> <br>
        <tr><?php echo $dado['categoria'];?></tr>
        <tr><?php echo $dado['descricao'];?></tr> <br>
        <tr><?php echo $dado['suB'];?></tr>
        <tr><?php echo $dado['pedidoUser'];?></tr> <br>
        <tr><?php echo $dado['anexo'];?></tr> <br>
        <tr><?php echo $dado['orcamento'];?></tr>

        
    </td>
    <form action="includes/mais.inc.php" method='post'>
    Dar Orçamento: <br>
    <input type="number" name="muorca">
    <input type="submit" name="submit" value="Enviar">
    </form>
      <?php }?>
    <?php }?>
</body>
</html>