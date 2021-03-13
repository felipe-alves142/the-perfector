<?php
  include_once "header.php";
?>

<body>

    <section>

    

        <h1>Entre e começe a receber orçamentos para serviços</h1>

        
        
    </section>

    <main>
        <h2>Login</h2>
        <form action="login.inc.php" method="post">
            <p for="usuario">Usuário</p>
                <br>
            <input type="text" name="usuario" placeholder="Usuário/Email">     
            <br>
           <br>
           
            <p for="senha">Senha</p>
                <br>
            <input type="password" name="senha" placeholder="Senha">
            
            <br>
            <input type="submit"  name="submit" value="Login" id="b">
            
        </form>
        <?php


      if(isset($_GET["error"])){
        if($_GET["error"]!== "Campovazio"){
          echo "Preencha todo os campos!";   
        }
        else if($_GET["error"] !== "wronglogin"){
          echo "Login Inválido!";  
        }
      }
?>


        <div id="links">
            <a href="">Esqueci minha senha</a>
            <a href="cadastro.html">Não tem conta ? Cadastre-se aqui</a>
            <a href="">Política de privacidade</a>

        </div>

    </main>

    
</body>
</html>