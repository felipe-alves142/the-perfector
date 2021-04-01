<?php
       include("includes/dbh.inc.php");
       $sql = "SELECT * FROM pedidos;";
        $c= mysqli_stmt_init($conn);
        $con = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
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

   <?php while($dado = $con -> fetch_array()){?>
        <td>
            <tr><?php echo $dado["titulo"];?> </tr> <br>
            <tr><?php echo $dado["categoria"]; ?></tr> <br>
            <tr><?php echo $dado["descricao"];?></tr><br>
            <tr><?php echo $dado["suB"];?></tr><br>
            <tr><?php echo $dado["status"];?></tr>
            <tr></tr>
        </td>
    
   <?php }?>

</body>
</html>