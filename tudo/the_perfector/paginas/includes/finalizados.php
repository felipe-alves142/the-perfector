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
     
     echo "<div  id='meio'><tr ><td >Enviado por:".$dado["userOR"]."</td> <br>";
     echo "<td >Valor:$".$dado['orca']."</td> <br>";
     echo "<a href='https://web.whatsapp.com/send?phone= $_SESSION[telefone];' target='blank'>Chat</a>";
     echo "
            
     </div>";
              echo " </tr><br>";
     
       
     ?>

        
 
  
<?php }?>   
</body>
</html>