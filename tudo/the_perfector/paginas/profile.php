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
        left:800px;
        
    }
    input{
        border-radius: 7px;
        background-color:#F0F0F0;
        border: 0;
        width: 250px;
        height: 40px;
    }
    #page1{
        
        position: relative;
        top: 180px;
        left:800px;
        
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
            <form action="" method=""> <br>
                <h5>Email:</h5> <br>
                <input type="text" name="email" id="email"  value="<?php echo $dado['userEmail'];?>"> <br><br>
                <h5>Senha:</h5> <br>
                <input type="text" name="" id="" placeholder="Senha"> <br> <br>
                <h5>Repita a nova senha:</h5> <br>
                <input type="text" name="" id="" placeholder="Repita a nova senha"> <br> <br><br><br><br>
                    <h5>Apagar minha Conta:</h5> <br>
                    <input type="text" name="" id="" placeholder="Digite Sua Senha">  <br>
                </form>
        </div>
        <div id="page1" >
              <h6>Email:</h6>
              <?php echo $dado["userEmail"];?> 
              <h6>Celular:</h6>
              <h3>Localização</h3> <br>
              <h6>Cidade</h6>
              <h6>Estado</h6>

        </div>
            
    <?php }?>
</body>
</html>