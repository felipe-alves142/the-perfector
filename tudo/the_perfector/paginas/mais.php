<?php
    session_start();

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
    <?php
    require_once "includes/dbh.inc.php";
    $stmt= mysqli_stmt_init($conn);
    $codigo = $_GET["codigo"];
    $sql="UPDATE pedido SET status=?,pedidoUser = ? WHERE Peid = $codigo;";
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: mais.php?error=stmtfalho");
        exit();
    }

    include_once "includes/functions.inc.php";
    $pu=$_SESSION["useruid"];
    $status= "RECEBIDO";
    mysqli_stmt_bind_param($stmt,'ss',$status,$pu);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: dashboard.php?codigo=$codigo;");
    exit();
    ?>
</body>
</html>