<?php
    include("includes/dbh.inc.php");
    $sql="SELECT * FROM pedido;";
    $stmt=mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));
    require "menudash.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>


<style>

table{
    position: relative;
    top: 52px;
    left:400px;
    background-color:#59e165;
    }

</style>
   <table> 

    
        <?php while($dado = $con -> fetch_array()){ ?>
            
            <tr>
                <td>Titulo</td>
                <td>Categoria</td>
                <td>Sub-Categoria</td>
                <td>Descrição</td>
                <td>Acão</td>
            </tr>
            
            <tr>

                <td><?php echo $dado["titulo"];?></td>
                <td><?php echo $dado["categoria"];?></td>
                <td><?php echo $dado["suB"];?></td>
                <td><?php echo$dado["descricao"];?></td>
                <td><a href="mais.php?codigo=<?php  echo $dado["Peid"];?>"> Mais</a></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color:white;"></td>
                <td style="background-color:white;"></td>
                <td style="background-color:white;"></td>
                <td style="background-color:white;"></td>
            </tr>  
            
            <?php };?>
   </table> 
   
</body>
</html>