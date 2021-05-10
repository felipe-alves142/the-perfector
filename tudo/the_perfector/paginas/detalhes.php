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
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon"> 
    <title>Detalhes</title>
</head>
<body>
 
<?php }?>
    
</body>
</html>