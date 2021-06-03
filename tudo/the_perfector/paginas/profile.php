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
    
    input{
        border-radius: 7px;
        background-color:#F0F0F0;
        border: 0;
        width: 250px;
        height: 40px;
    }
    #page2{
        position: relative;
        margin:200px 0 0 600px;
    }
    #page1{
        position: relative;
        margin:200px 0px 0px 600px;
    }
    li{
        list-style: none;
        display: inline-block;
        padding:30px;
    }
    #mudar{
        background: linear-gradient(to  left, #7367F0,#CE9FFC);

    }
</style>
    
			<script>
				function showPage(page){
					document.querySelectorAll('div').forEach(div => {
						div.style.display = 'none';
					})
					document.querySelector(`#${page}`).style.display = 'block';
				}
					
					document.addEventListener("DOMContentLoaded" , function(){
					   //evento que faz esperar todo conteudo da página carregar
						document.querySelectorAll("a").forEach(a => {
					
						//Seleciona a query button e faz um loop	
						 a.onclick= function(){
							 // esse loop vai mostrar ou desaparecer de acordo com o borao selecionado
							 showPage(this.dataset.page);
						 }
					   })
				   })
				
			   </script>
          

			
    <?php include_once "includes/profileTop.php";?>
        <a href="#" style="text-decoration:none;" data-page="page1"><h4>Perfil</h4></a> <br>
        <a href="#" data-page="page2"><h4>Conta</h4></a><br>
        <a href="#" data-page="page3"><h4>Configurações</h4></a>
        
       
                        
        <?php 
        while($dado = $con -> fetch_array()){
        
        ?>
 <div id="page2" style="display:none;">
            <form action="includes/profile.inc.php" method="post"> <br>
                <h5>Email:</h5> <br>
                <input type="text" name="email" id="email"  placeholder="<?php echo "Email Atual:". $dado['userEmail'];?>"> <br><br>
                <input type="submit" name="submit" id="mudar" value="Mudar Email"> <br> <br>
            </form>
            
            <form action="includes/profile.inc.php" method="post">
                <h5>Senha:</h5> <br>
                <input type="password" name="senha" id="senha" placeholder="Senha"> <br> <br>
                <h5>Repita a nova senha:</h5> <br>
            
                <input type="password" name="repSenha"  id="repSenha" placeholder="Repita a nova senha"> <br> <br>
                <input type="submit" name="submit" value="Mudar Senha" id="mudar">    <br> <br>
            </form>
                 <form action="" method="post">
                   <section style="background-color:#FBBCC8; padding:20px; width:400px;">
                    <h5>Apagar minha Conta:</h5> <br>
                    <input type="text" name="" id=""  placeholder="Digite Sua Senha">  <br> <br>
                    <input type="submit" name="" id="" style="background-color:#EC5046; border-radius:7px; width:140px;" value="Apagar Conta"> 
                  </section>
                </form>
      
            </div>
        <div id="page1">
            <ul>
                <li><strong>Email:</strong></li> 
                    <?php echo $dado["userEmail"];?>
                <li><strong>Celular:</strong></li>
                    <?php echo $dado["celular"];?>
            
            </ul>
            <h4 style="color:#747474;">Localização</h4>            
            <ul>
                <li><strong>Cidade:</strong></li>
                    <?php echo $dado["cidade"];?>
                <li><strong>Estado:</strong></li>
                    <?php echo $dado["estado"];?> 
            </ul>
            
      </div>
            
    <?php }?>
    <?php
     if(isset($_GET["error"])){ 
        if($_GET["error"] == "dadoscadastrado"){
            echo "<div id='msg' class='alert alert-danger' role=''alert>Email ja cadastrado!</div>";
        }
        if($_GET["error"] == "senhadesigual"){
            echo "<div id='msg' class='alert alert-danger' role=''alert>Senha Desigual!</div>";
        }
        if($_GET["error"] == "senhainvalida"){
            echo "<div id='msg' class='alert alert-danger' role=''alert>Senha Inválida!</div>";
        }
        if($_GET["error"] == "emailinvalido"){
            echo "<div id='msg' class='alert alert-danger' role=''alert>Email Inválido!</div>";
        }
    }
    ?> 
</body>
</html>