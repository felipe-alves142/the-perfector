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

    
//   if(campovazio($titulo,$categoria, $subcategoria,$descricao) !== false){
//         header("location: ../pedido.php?error=Campovazio");
//         exit();
// //     }   
//     else{
//         header("location: ../dashboard.php");
//         exit();
//     }
   
    session_start();
    $cara= $_SESSION["useruid"];
    //  guardaPedido($conn,$titulo,$categoria,$descricao,$cara,$subcategoria,$anexar,$orcamento);
    guardaPedido($conn,$titulo,$categoria,$descricao,$subcategoria,$cara,$anexar,$orcamento);
   // guardaOrcamento($conn,$orcamento);
  }

