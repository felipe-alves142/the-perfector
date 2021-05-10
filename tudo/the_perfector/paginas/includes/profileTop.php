<?php 
        session_start();
        require_once "includes\dadosPega.php";
        $p1 = new Pega;
        $sql = $p1 -> sql = "SELECT * FROM pedido;";
        $stmt = $p1 -> stmt = mysqli_init($conn);
        $con = $p1-> con = mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <img src="..\imagens\user-avatar.png" style="width: 200px; position:absolute; left:87px; top:89px;">
    <h2 style="position:absolute; left:400px; top:160px; "><?php 
          if(isset($_SESSION["userid"])){
            //include_once "includes/functions.inc.php";
            echo $_SESSION["useruid"];
          
    
            }

    ?></h2>
    <?php 
        while($dado = $con -> fetch_array()){
        
    ?>

    <?php }?>

    
    
</body>
</html>