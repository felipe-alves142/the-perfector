<?php
    session_start();
    include("includes/dbh.inc.php");
    $nome= strval($_SESSION['useruid']);
    $sql="SELECT * FROM orcamento,pedido WHERE (idOr LIKE Peid) AND userOR = '$nome' AND status='Aprovado';";
    
    $stmt=mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/icon" href="../imagens/logo-icon.svg"> 
    <link rel="stylesheet" href="../styles/dashboardEmpresa.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>
<body>
    
<script>
  function showPage(page){
					document.querySelectorAll('section').forEach(section => {
						section.style.display = 'none';
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
<style>
        a{
            text-decoration: none;
            color: black;
        }
 
    </style>
<div id="topdash">
        <ul>
         <li><a href="display.php" style="text-decoration:none">Explorar</a></li>
         <li><a href="categorias.php" style="text-decoration:none">Categorias</a></li>
        </ul>
        
        <ul id="menu">
        <li><img id="prof" src="../imagens/usuario.png"></li>
        <ul id="subm">
            <?php
             echo "<li><a href='dashboard.php'>Cliente</a></li><br>";
                    
              echo "<li><a href='includes/logout.inc.php'>Sair</a></li><br>";
                
            ?>
            </ul>    
  </ul>
  <a href="#"><img id="chat" src="../imagens/chat.png"></a>
    <a href="pedido.php"><img id="cpe" src="../imagens/cpedido.png"></a>
    <?php
          
          include_once "includes/footer.php";
          if(isset($_SESSION["userid"])){
              include_once "includes/functions.inc.php";
              echo "<p id='bvd'>Bem Vindo(a) Prestador ".$_SESSION["useruid"]."</p>";
            
      
              }

    ?>
    <br>
    </div>
    <ul>
        <li id="re"><a   href="#" style="text-decoration:none" data-page="page1"><p>Avaliações</p> </a></li>
        <li id="ap"><a   href="#" style="text-decoration:none" data-page= "page2"> <p>  Meus Serviços</p></a></li>
        <li id="fi"><a   href="#" style="text-decoration:none" data-page="page3"><p>Agenda</p></a></li>
        
    </ul>
    <?php while($dado = $con -> fetch_array()){?>
    <br><br>
  
        
 
    
    <section id="page2" style="display:none;">
        

 
    </section>

    <?php }?>
</body>
</html>