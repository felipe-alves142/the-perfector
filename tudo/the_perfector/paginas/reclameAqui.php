<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href='../styles/style.css'>
    <title>Reclame Aqui</title>
</head>
<body>
    <style>
        #textoTop{
            position: absolute;
            left: 250px;
            top: 231px;
            margin-right: 20%;
            margin-left: 10%;
            font-weight: 500;
            line-height: 52px;
            text-align: center;
            color: #000000;
        }
        h4{
            position: relative;
            top: 50px;
            left: -60px;
        }
        
        input{
            position: static;
            width: 200px; 
            left: 0px;
            top: 100px;
            height: 25px;
            background: #ECECEC;
            border-radius: 7px;
            border: 0;
        }
        form{
            position: absolute;
            left: -50%;
        }
        input[type="submit"]{
            position: absolute;
            width: 250px;
            height: 40px;
            left: 395px;
            top: 700px;

            background: linear-gradient(90.9deg, #05DD5E 8.21%, #34EB7D 90.27%);
            border-radius: 10px;
        }
    </style>
    <?php
        if(isset($_SESSION['userid'])){
            include_once "includes/functions.inc.php";
            echo '    <a href="dashboard.php"> <img src="../imagens/back-button.png" style="position:fixed; top:10px; width:180px;"> </a>';
            echo '<h4 style="left: 500px;" >Conte-nos mais sobre suas reclamaçoes,'. $_SESSION["useruid"]."</h4>";
        }else{
            echo "<nav class='navbar'>
        <ul>
          <li class='title'><a href='index.php'><img src='../imagens/logo-icon-circle.svg' width='71px'></a></li>
    
          <li><a href='#'>Home</a></li>
          <li><a href='#comoF'>Como funciona</a></li>
        <!--  <li><a href='#cate'>Categorias</a></li>
            -->    
          <div class='bt'>
          <li><a href='../paginas/signup.php'><button class='cadastro'>Cadastrar-se</button></a></li>
          <li><a href='includes/login.php' ><button class='entrar'>Entrar</button></a></li>
          
          </div>
        </ul>
      </nav>";
        }
    
    ?>
    
      <div id="textoTop">
         <h1>
             Entre  em contato conosco para obter <br> suporte ou se você tem alguma sugestão
         </h1> 
     
            <form action=""> <br> <br>
             <div style="position: relative; margin-right: 20%;">
                  <h4 style="left: -80px;">E-mail</h4>  
                    <input type="text" name="" id="">
          
                 <h4 style="left: -70px;"> Assunto</h4>
                
                    <input type="text" name="" id="">
             </div>
             <div style="position: relative; margin-left: 380px; left: 100px; top: -290px;">
                <h4 style="left: -80px;">Nome</h4>  
                <input type="text" name="" id="">
           
             <h4>Mensagem</h4>
                <textarea  name="" id="" style=" position:relative; top: 20px; left:100px; width: 421px; height: 259px; background: #ECECEC; border:0;"> </textarea>
             </div>
               <input type="submit" value="Enviar">
            </form>
          </div>
        
      
    
</body>
</html>