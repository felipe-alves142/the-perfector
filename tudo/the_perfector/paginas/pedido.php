<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/pedid.css">
    <script src="../scripts/pedi.js"></script>
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
            <option value="Gerais">Gerais</option>
            <option value="Programação">Programação</option>
            <option value="Marcenaria">Marcenaria</option>
            <option value="Contrução">Contrução</option>
        </select><br><br>
       <div id="des">
        Descreva o serviço a ser executado
            <textarea name="des"></textarea>
       </div>
        
            <select name="sub" id="subc">
                <option value="" disabled selected>Sub-Categoria</option>
                <option value="Ajudante">Ajudante<p></p></option>
                <option value="Programador Web/Mobile">Programador Web/Mobile</option>
                <option value="Pintor">Pintor</option>
                <option value="Pedreiro">Pedreiro</option>
            </select><br><br>
        Anexar Arquivos <br>
        <input type="file" name="anexar" ><br><br>

        Orçamento <br>
        <div id="in">
        
        <input type="radio" id="p1" name="pedido"  value="Menos de R$ 300,00">
        <label for="p1"> Menos de R$ 300,00 </label><br>

        <input type="radio" id="p2" name="pedido" value="R$ 301,00 a R$ 500,00">
        <label id ="ps" for="p2" >R$ 301,00 à R$ 500,00 </label><br>

        <input type="radio" id="p3" name="pedido" value="R$ 501,00 a R$ 800,00">
        <label id="ps1" for="p3">R$ 501,00 à R$ 800,00</label><br><br>
        
        <input type="radio" id="p4" name="pedido" value="R$ 801,00 a R$ 1200,00">
        <label id="ps2" for="p4">R$ 801,00 à R$ 1200,00</label><br></br>

        <input type="radio" id="p5" name="pedido" value="R$ 1200,00">
        <label id="ps3" for="p5">R$ 1200,00</label>
        </div>
       <div id="con"><input type="submit" name="submit" value="Confirmar" id="c"></div>
            
    </form>

</body>
</html>