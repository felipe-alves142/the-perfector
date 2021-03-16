<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/login.css">

    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
</head>
<body>       
    <section>
        <h1>Cadastre-se e começe a receber orçamentos para serviços</h1>

        
        
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
            <input type="password" name="senha" placeholder="Senha">
            <input type="password" name="repSenha" placeholder="Repita a Senha">
            <br>
            <h1 name="campovazio"></h1>
            <input type="submit"  name="submit" value="Cadastrar" id="b">
            
        </form>

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


      
    </main>
 
    
</body>
</html>