<?php
  session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  
  

  <title>The Perfector</title>
  <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
</head>

<body>

  <nav class="navbar">
    <ul>
      <li class="title"><a href="index.php"><img src="../imagens/logo-icon-circle.svg" width="71px"></a></li>

      <li><a href="#">Home</a></li>
      <li><a href="#comoF">Como funciona</a></li>
      <li><a href="#cate">Categorias</a></li>
  

      <div class="bt">
      <?php
          if(isset($_SESSION["userid"])){
            echo "<li><a href='../paginas/signup.php'><button class='cadastro'>App</button></a></li>";
            echo " <li><a href='includes/logout.inc.php' ><button class='entrar'>Sair</button></a></li>";
            echo "<p>Ola,".$_SESSION["useruid"]."</p>";
          }else{
            echo "<li><a href='../paginas/signup.php'><button class='cadastro'>Cadastrar-se</button></a></li>";
            echo " <li><a href='includes/login.php' ><button class='entrar'>Entrar</button></a></li>";
            
          
          }

      ?>
      </div>
    </ul>
  </nav>

  <main class="conteudo">
    <div class="top-desing"></div>

    <div id="cate">

      <a name="cate"></a>

      <h1>Categorias</h1>

      <br>

      <button id="cat" class="cat1">
      </button>

      <button id="cat" class="cat2">
        
      </button>

      <button id="cat" class="cat3">
        
      </button>

      <button id="cat" class="cat4">
        
      </button>

    <br>
    <br>

      <button id="cat" class="cat5">
        
      </button>

      <button id="cat" class="cat6">
        
      </button>

      <button id="cat" class="cat7">
        
      </button>
    </div>

    <hr id="div">

    <a name="comoF"></a>

    <h1 id="oq">O que é o Perfecto?</h1>

    <div id="textbox1">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Laoreet nisl nulla montes, dignissim massa rutrum id. Pharetra, bibendum ipsum turpis amet, felis, in massa. Sollicitudin mauris nec porttitor ultrices viverra a, convallis integer facilisi. Risus, at suspendisse lacus mattis ultrices odio. Malesuada nibh risus ligula vitae posuere consequat amet.</p>
    </div>

    <div id="textbox2" class="textbox">
      <img src="../imagens/Star.png" alt="estrela">
        <div class="text">
          <h2>Lorem ipsum dolor</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Laoreet nisl nulla montes, dignissim massa rutrum id.</p>
        </div>
    </div>

    <div id="textbox3" class="textbox">

      <div class="text">
        <h2>Lorem ipsum dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Laoreet nisl nulla montes, dignissim massa rutrum id.</p>
      </div>
      <img src="../imagens/Shield.png" alt="escudo">
      
    </div>

    <div id="textbox4" class="textbox">
      <img src="../imagens/hand.png" alt="mão">
      <div class="text">
        <h2>Lorem ipsum dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Laoreet nisl nulla montes, dignissim massa rutrum id.</p>
      </div>
    </div>
  </main>






  <footer>
    <h1><a href="#cate">Serviços</a></h1>
    

    
  </footer>


</body>

</html>