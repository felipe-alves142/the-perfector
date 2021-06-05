<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/pedido.css">
   <title>Pedido</title>
    
    </head>
<body>
    <h3>Novo Pedido</h3>
    


    <div id="liorca"> 
       
    <form action="includes/pedido.inc.php" method="post">
       <h5>Titulo Do Projeto </h5>
       
        <input type="text" name="titulo" id="subc"> <br>
        <h6>Categoria</h6>
        <select name="categoria" id="subc">
        
            <option value="" disabled selected>Categoria</option>
            <option value="Gerais">Gerais</option>
            <option value="Programação">Programação</option>
            <option value="Marcenaria">Marcenaria</option>
            <option value="Contrução">Contrução</option>
        </select> <br>
       <div id="des">
       <h6>Descreva o serviço a ser executado</h6>
      
            <textarea name="des"></textarea>
       </div>
        
            <select name="sub" id="subc">
                <option value="" disabled selected>Sub-Categoria</option>
                <option value="Ajudante">Ajudante<p></p></option>
                <option value="Programador Web/Mobile">Programador Web/Mobile</option>
                <option value="Pintor">Pintor</option>
                <option value="Pedreiro">Pedreiro</option>
            </select><br><br>
       <h6>Anexar Arquivos</h6><br>
        <label class="custom-file-upload">
            <img src="../imagens/ant-design_plus-circle-outlined (1).png" style="position:relative; top:-12px;">
            <input type="file" name="anexar">
                   
        </label> 
         
        <br> <br>
       <h6>Orçamento</h6> 
        <div id="in">
        <script>
       function menuClick(label) {
        var x = document.querySelector(".primary")
            const texto = label.id;
            console.log(texto);
      
            let tag = document.getElementById(texto);    
            tag.style.backgroundColor='#2AE876';
        
      
       }
       </script>
        <input type="radio"  id="p1" name="pedido"    value="Menos de R$ 300,00">
        <label for="p1" id='lb1' class='primary' onclick= "menuClick(this)"  >
         
            Menos de R$ 300,00
            
        </label>

        <input type="radio" id="p2" name="pedido"  value="R$ 301,00 a R$ 500,00"  >
        <label id ="ps" for="p2" id='lb2' class='primary' onclick= "menuClick(this)"> <p>R$ 301,00 à R$ 500,00</p> </label><br>

        <input type="radio" id="p3" name="pedido" value="R$ 501,00 a R$ 800,00" >
        <label id="ps1" for="p3"  id='lb3' class='primary' onclick= "menuClick(this)">R$ 501,00 à R$ 800,00</label><br><br>
        
        <input type="radio" id="p4" name="pedido"  value="R$ 1200,00" >
        <label id="ps2" for="p4"  id='lb4' class='primary' onclick= "menuClick(this)"  >Mais de R$ 1200,00</label><br> <br>

        <input type="radio" id="p5" name="pedido"  value="R$ 801,00 a R$ 1200,00" >
        <label id="ps3" for="p5"  id='lb5' class='primary' onclick= "menuClick(this)"  >R$801,00 à R$1200,00</label>
        
            
        </div>
       <input type="submit" name="submit" value="Confirmar" id="c">     
    </form>

        <script src="../scripts/pedido.js">
        </script>
            
</body>
</html>