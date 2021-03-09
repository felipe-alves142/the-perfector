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
            <input type="submit"  name="submit" value="Cadastrar" id="b">
            
        </form>


        <div id="links">
            <a href="">Esqueci minha senha</a>
            <a href="cadastro.html">Não tem conta ? Cadastre-se aqui</a>
            <a href="">Política de privacidade</a>

        </div>

    </main>

    
</body>
</html>