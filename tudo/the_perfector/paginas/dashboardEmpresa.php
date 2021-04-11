<?php
        
    require_once "menudash.php";
    include('includes/dbh.inc.php');
  //  session_start();
   // $cod= $_SESSION['co'];
    $sql="SELECT * FROM pedido;";

    $stmt=mysqli_stmt_init($conn);
    $query= mysqli_query($conn,$sql) OR die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="stylesheet" href="../styles/dashboar.css">
    <title>Empresa</title>
</head>
<body>
<ul>
        <li id="re"><a   href="#" style="text-decoration:none"><p>Ultimas Visualizações</p> </a></li>
        <li id="ap"><a  href="#" style="text-decoration:none"> <p>Meus Serviços</p></a></li>
        <li id="fi"><a  href="#" style="text-decoration:none"><p>Agendados</p></a></li>
        
    </ul>
    <?php while($dado = $query -> fetch_array()){?>
        <td>
            <tr><?php echo $dado['titulo'];?></tr>
            <tr><?php echo $dado['descricao'];?></tr>
            <tr><?php echo $dado['pedidoUser'];?></tr>
        </td>

    <?php }
    ?>

</body>
</html>