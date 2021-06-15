<?php 

    include("dbh.inc.php");
    $nome= strval($_SESSION['useruid']);
    
    $sql="SELECT * FROM orcamento,pedido WHERE (idOr LIKE Peid) AND pedidoUser = '$nome' AND status = 'Aprovado';";
    $stmt=mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php while($dado = $con -> fetch_array()){
     ?>
       <?php 
     
     echo "<div  id='meio2' style='color:white;'><tr ><td >Enviado por:".$dado["userOR"]."</td> <br>";
     echo "<td >Valor:$".$dado['orca']."</td> <br>";
     echo "<a href='https://web.whatsapp.com/send?phone= $_SESSION[telefone];' target='blank'>Chat</a>";
     echo "
     <img src='../imagens/Vectorf.png' style='position:absolute; left: 155px; top:65px;'>
     <img style='position:absolute; left: 260px; top:120px; height: 50px;' src='../imagens/ant-design_plus-circle-outlined.png'>

     </div>";
              echo " </tr><br>";
     
       
     ?>

        
 
  
<?php }?>   
</body>
</html>