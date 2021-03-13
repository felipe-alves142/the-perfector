<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
</head>
<body>

    <section>

    

        <h1>Entre e começe a receber orçamentos para serviços</h1>

        
        
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
                  echo "Preencha todo os campos!";   
                }
                else if($_GET["error"] == "emailinvalido"){
                  echo "Email Inválido!";
                }
                else if($_GET["error"] == "usuariovazio"){
                  echo "Usuário Inválido!";  
                }
                else if($_GET["error"] == "senhavazia"){
                  echo "Senha Inválida";  
                }
                else if($_GET["error"] == "usuarioemailca"){
                   echo "Usuario e email já cadastrado"; 
                }
                else if($_GET["error"] == "stmtfalho"){
                    echo "Algo deu errado, tente novamente";
                }
                else if($_GET["error"] == "none"){
                  header("location: includes\login.inc.php");  
                  echo "Cadastro efetuado com sucesso!";
                  
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