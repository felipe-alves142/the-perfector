<?php

if (isset($_POST["submit"])){
    $titulo = $_POST["titulo"];
    $categoria = $_POST["categoria"];
    $subcategoria = $_POST["sub"];
    $anexar = $_POST["anexar"];
    $descricao = $_POST["des"];
    $orcamento = $_POST["pedido"];
  

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    
  if(campovazio($titulo,$categoria,$descricao,$subcategoria) !== false){
        header("location: ../pedido.php?error=Campovazio");
        exit();
    }   
    /**else{
        header("location: ../dashboard.php");
        exit();
    }**/
   
    guardaPedido($conn,$titulo,$categoria,$descricao,$subcategoria,$anexar,$orcamento);
   // guardaOrcamento($conn,$orcamento);
  }

