<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="../imagens/logo-icon.svg"> 
    <title>Perfil</title>
</head>
<body>
<style>
    a{
        color:black;
        text-decoration: none;
        position: relative;
        top: 400px;
        left:89px;
        
    }
    form{
        position: relative;
        top: 180px;
        left:500px;
        
    }
    input{
        border-radius: 7px;
        background-color:#F0F0F0;
        border: 0;
        width: 250px;
        height: 40px;
    }
</style>
    <?php
     include_once "includes/profileTop.php";
    
    ?>
        <a href="#" style="text-decoration:nonne;"><h4>Perfil</h4></a> <br>
        <a href="#"><h4>Conta</h4></a><br>
        <a href="#"><h4>Configurações</h4></a>

        <form action="" method=""> <br>
            <h5>Email:</h5> <br>
            <input type="text" name="" id=""> <br><br>
            <h5>Senha:</h5> <br>
            <input type="text" name="" id="" placeholder="Senha"> <br> <br>
            <h5>Repita a nova senha:</h5> <br>
            <input type="text" name="" id="" placeholder="Repita a nova senha"> <br> <br><br><br><br>
            <div style="background-color:#FBBCC8; width:400px; height: 170px; padding:20px;">
                <h5>Apagar minha Conta:</h5> <br>
                <input type="text" name="" id="" placeholder="Digite Sua Senha">  <br>
            </div> <br><br><br><br>
        </form>
       
</body>
</html>