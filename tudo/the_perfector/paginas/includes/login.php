
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
</head>
<body>

    <section>

    

        <h1>Entre e começe a receber orçamentos para serviços</h1>

        
        
    </section>

    <main>
        <h2>Login</h2>
        <form action="../paginas/includes/login.inc.php" method="post">
            <p for="usuario">Usuário</p>
                <br>
            <input type="text" name="usuario" placeholder="Usuário/Email">     
            <br>
           <br>
            <p for="email">E-mail</p>
                <br>
    
                <br>
            <p for="senha">Senha</p>
                <br>
            <input type="password" name="senha" placeholder="Senha">
            
            <br>
            <input type="submit"  name="submit" value="Login" id="b">
            
        </form>


        <div id="links">
            <a href="">Esqueci minha senha</a>
            <a href="cadastro.html">Não tem conta ? Cadastre-se aqui</a>
            <a href="">Política de privacidade</a>

        </div>

    </main>

    
</body>
</html>