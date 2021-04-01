<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/pedido.css">
    <script src="../scripts/pedido.js"></script>
    <title>Pedido</title>
    
    </head>
<body>
    <h1>Novo Pedido</h1>
    <div id="liorca"> 
    <form action="includes/pedido.inc.php" method="post">
       Titulo Do Projeto <br>
        <input type="text" name="titulo" id="subc"><br>
         <br>
        <select name="categoria" id="subc">
        
            <option value="" disabled selected>Categoria</option>
            <option value="se">se</option>
            <option value="ffw">ffe</option>
            <option value="vv">vv</option>
            <option value="sss">sss</option>
        </select><br><br>
       <div id="des">
        Descreva o serviço a ser executado
            <textarea name="des"></textarea>
       </div>
        
            <select name="sub" id="subc">
                <option value="" disabled selected>Sub-Categoria</option>
                <option value="op1"><p>op</p></option>
                <option value="op2">op2</option>
                <option value="op3">op3</option>
                <option value="op4">op4</option>
            </select><br><br>
        Anexar Arquivos <br>
        <input type="file" name="anexar" ><br><br>

        Orçamento <br>

            <input type="radio"  id="male" name="gender" value="male">
            <label for="male" id="m"><p id="labelt"> <p id="labelt">  Menos de R$ 300,00 </p></label>
            
            <input type="radio"  id="male" name="gender" value="male">
            <label for="male" id="m"><p id="labelt"> <p id="labelt">  R$ 301,00 à R$ 500,00 </p></label>
        
            <input type="radio"  id="male" name="gender" value="male">
            <label for="male" id="m"><p id="labelt"> <p id="labelt"> R$ 501,00 à R$ 800,00  </p></label>
            <br>
            <input type="radio"  id="male" name="gender" value="male">
            <label for="male" id="m"><p id="labelt"> <p id="labelt">  R$ 801,00 à R$ 1200,00 </p></label>
        
            <input type="radio"  id="male" name="gender" value="male">
            <label for="male" id="m"><p id="labelt"> <p id="labelt"> R$ 1200,00 </p></label>
        
       <div id="con"><input type="submit" name="submit" value="Confirmar" id="c"></div>
            
    </form>

</body>
</html>