<?php 
      session_start();
      require_once "dadosPega.php";
      $p1 = new pega;
      $nome = $_SESSION['useruid'];
      //$sql = $p1 -> sql = "SELECT * FROM users ;";
      $sql = "SELECT * FROM users WHERE userUid='$nome';";
      $stmt = $padrao -> stmt;
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
<style>
    @media only screen and (max-width:700px){
        h2{
             margin-left: -50px;
        }
       
    }
</style>
    <img src="../imagens/user-avatar.png" style="width: 200px; position:absolute; left:87px; top:89px;">
    <h2 style="position:absolute; left:400px; top:160px; "><?php 
          if(isset($_SESSION["userid"])){
            //include_once "includes/functions.inc.php";
            echo $_SESSION["useruid"];
            
    
            }

    ?></h2>
    
    
    
</body>
</html>