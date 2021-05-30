<?php
    session_start();
    include("includes/dbh.inc.php");
    $nome= strval($_SESSION['useruid']);
    $sql="SELECT * FROM orcamento,pedido WHERE (idOr LIKE Peid) AND userOR ='$nome' AND status='Aprovado';";
    $stmt=mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
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
    .menu{
        top: 55px;
    }
</style>

<div id="sideMen">
<div id="topdash">
        <ul>
        <li><a href="display.php" style="text-decoration:none; color: white;">Explorar</a></li>
         <li><a href="categorias.php" style="text-decoration:none; color: white;">Categorias</a></li>
         
        
        </ul>
        
               
        </ul>
        
 
    <br>
    </div>
    <?php
          
          if(isset($_SESSION["userid"])){
              include_once "includes/functions.inc.php";
              echo "<p id='bvd'>Bem Vindo(a) Prestador ".$_SESSION["useruid"]."</p>";
              }

    ?>
        <ul>
            <li id="re"><a   href="#" style="text-decoration:none; color:white;" data-page="page1"><p>Avaliações</p> </a></li>
            <li id="ap"><a   href="#" style="text-decoration:none;  color:white;" data-page= "page2"> <p>  Meus Serviços</p></a></li>
            <li id="fi"><a   href="#" style="text-decoration:none;  color:white" data-page="page3"><p>Agenda</p></a></li>
            
        </ul>
     </div>  
        <?php while($dado = $con -> fetch_array()){?>
    <br><br>
  
        
 
    <section id="page2">
         
    <?php 
     
     echo "<div  id='meio' display:block; background:black;><tr> 
     <td>Titulo do serviço:".$dado["titulo"]."</td> <br>
     <td>Categoria:".$dado["categoria"]."</td> <br>
     <td>Descrição:".$dado["descricao"]."</td> <br>
     <td>Cliente:".$dado["pedidoUser"]."</td> <br>";
      echo "<td >Valor:$".$dado['orca']."</td>";
      echo "<a style='position:absolute; top:25px;left:175px;' href='detalhes.php?codigo=$dado[Peid]'>
          
      <img src='../imagens/Vector.png'>       
      <img style='position:absolute; left: 90px; top:70px; height: 50px;' src='../imagens/ant-design_plus-circle-outlined.png'>
 
 </a></div>";
         
      echo " </tr></section>";
        
      ?>  <?php }?>
        
            
        <?php include_once "includes/footer.php";?>
    </body>
</html>