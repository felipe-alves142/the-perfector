<?php
    session_start();
    include("includes/dbh.inc.php");
    $nome= strval($_SESSION["useruid"]);
    
    // $sql="SELECT * FROM pedido WHERE  pedidoUser = '$nome';";
    $sql="SELECT * FROM orcamento,pedido WHERE (idOr LIKE Peid) AND pedidoUser = '$nome' AND status = 'Recebido';";

    $stmt=mysqli_stmt_init($conn);
    $con= mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $_SESSION['telefone']=$ph=5511910206964;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximun-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/icon" href="../imagens/logo-icon.svg"> 
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/foote.css">
</head>
<body>

<script>
  function showPage(page){
					document.querySelectorAll('section').forEach(section => {
                        section.style.display='none'
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
        li{
            list-style-type: none;
            
        }      
        .menu{
            top: -228px;
            left: -10px;
        }
        footer{
            bottom: -500px;
            overflow-x: hidden;
            overflow-y:hidden;
        }
        #meio{
            height:230px;
        }
    </style>
    
   <div id="topdash" style="display:block;">
        <ul>
         <li><a href="display.php" style="text-decoration:none" ><h6><strong>Explorar</strong> </h6></a></li>
        <div id='menu'>
            <?php include_once "includes/menu.php";?>   
        </div> 
         
        </ul> 
         
        <ul id="subm">    
            <?php
              echo "<li><a href='dashboardEmpresa.php'>Empresa</a></li><br>";  
              echo "<li><a href='profile.php'>Perfil</a></li><br>";      
              echo "<li><a href='includes/logout.inc.php'>Sair</a></li><br>";
                
            ?>
        
        <!--<li><img id="prof" src="../imagens/usuario.png"></li>-->

  </ul>
  
        <div id="primary">
    <?php
            
          if(isset($_SESSION["userid"])){
              include_once "includes/functions.inc.php";
             echo "<h6 id='bvd'>Bem Vindo(a) ".$_SESSION["useruid"]."</h6>";
             
             }

    ?>
    <br>
    </div>
    <div  style="position:absolute; left:380px; margin-top:50px;">
        <ul>
            <li id="re"><a   href="#" style="text-decoration:none" data-page="page1"><p> <strong>Recebidos</strong></p> </a></li>
            <li id="ap"><a   href="#" style="text-decoration:none" data-page="page2"> <p>  <strong>Aprovados</strong></p></a></li>
            <li id="fi"><a   href="#" style="text-decoration:none" ><p><strong> Finalizado</strong></p></a></li>
            
        </ul>
    </div>
    <?php 
    echo "<a href='https://web.whatsapp.com/send;' target='blank'><img height='60px' id='chat' src='../imagens/cha.png'></a>"    ?>
     <a href="pedido.php"><img id="cpe" src="../imagens/cpedido.png"></a>
    <br><br>
 
        <section id="page1">
        <?php while($dado = $con -> fetch_array()){
        ?>
        <br> <br>
        <?php 
        echo "<h6 style='margin-left:585px; font-size:20px;' id='tituloOrcamento'>Orçamentos recebidos</h6>";
        echo "<div  id='meio' style='color:white;'><tr ><td >Enviado por:".$dado["userOR"]."</td> <br>";
        echo "<td >Valor:$".$dado['orca']."</td><br>";
        echo "<td style='position:relative; margin-bottom:10px;' >Descrição:".$dado['descricao']."</td>";
        echo "<a style='position:absolute; top:25px;left:175px;' href='detalhes.php?codigo=$dado[Peid]'>
            
        <img src='../imagens/Vector.png' style='position:absolute; left:0px; top:80px;' id='imgVetor'>       
        <img style='position:absolute; left:60px; top:130px; height: 50px;' src='../imagens/ant-design_plus-circle-outlined.png' id='plusImg'>
    </a></div>";
            
        echo " </tr><br>";
        
        
        ?>
            
    
    
    <?php }?>  
        </section>
    
    <section id="page2" style="display:none;">
    <?php
      
        include_once "includes/finalizados.php";
              
      ?>
        </div>  
    
              <?php  include_once "includes/footer.php";?>
</body>
</html>