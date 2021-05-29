<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <script type="text/javascript" src="cadastro.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/mene.css">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
  
</head>

<body>       
<style>
 
    
</style>

    <section>
       
        <?php


if(isset($_GET["error"])){
        if($_GET["error"]== "Campovazio"){
         echo '<div id="msg" class="alert alert-danger" role="alert">Preencha todo os campos!</div>';  
        }
        else if($_GET["error"] == "emailinvalido"){
         echo '<div class="alert alert-danger" role="alert">Email Inválido</div>';  
        }
        else if($_GET["error"] == "usuariovazio"){
            echo '<div class="alert alert-danger" role="alert">Usuário Vazio!</div>';
        }
        else if($_GET["error"] == "senhainvalida"){
            echo '<div class="alert alert-danger" role="alert">Senha Inválida!</div>';
        }
        else if($_GET["error"] == "jacadastrado"){
            echo '<div class="alert alert-danger" role="alert">Usuario e email já cadastrado</div>'; 
        }
        else if($_GET["error"] == "stmtfalho"){
            echo '<div class="alert alert-danger" role="alert">Algo deu errado, tente novamente!</div>';
        }
        else if($_GET["error"] == "senhainvalida"){
            echo '<div class="alert alert-danger" role="alert">Senha Inválida!</div>';
        }
        else if($_GET["error"] == "none"){
          header("location: includes\login.inc.php");  
          echo "Cadastro efetuado com sucesso!";
          
        }
       
    }
?>

        
    </section>

    <main>
          <h2>Cadastro</h2>
        <form action="includes/signup.inc.php" method="post">
            <p for="usuario">Usuário</p>
                <br>
            <input type="text" name="usuario" placeholder="Usuário">     
            <br>
           <br>
            <p for="email">E-mail</p>
                <br>
            <input type="email" name="email" placeholder="Seu Email">
                <br>
            <p for="senha">Senha</p>
                <br>
            <input type="password" name="senha" id="se" placeholder="Senha" maxlength="8">
                <ul>
                    <li id="mx">Máximo 8 digitos</li><br>
                    <li id="mn">Deve ter 2 números</li><br>
                    <li id="mc">Deve ter estes caracteres especiais: @!%;:.</li>
                </ul>
            <input type="password" name="repSenha" placeholder="Repita a Senha" maxlength="8">
            <br> <br>
            <input type="submit"  name="submit" value="Cadastrar" id="b">

        </form>
        <a href="../paginas/includes/login.php">Já tem conta? Entre!</a>
        </main>
   
    
 
    
</body>
</html>