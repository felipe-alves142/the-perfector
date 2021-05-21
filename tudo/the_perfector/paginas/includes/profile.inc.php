<?php
session_start();
if(isset($_SESSION['userid'])){
    $celular = $_POST["celular"];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];

    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';

   if(dadosVazios($celular,$estado,$cidade) !== false){
        header("location: ../profile.php?error=campovaizo");
        exit();
   }else{
       header("location:../dashboard.php");
       exit();
    }
   
    $codigo = 39;
    guardaNovosDados($conn,$celular,$estado,$cidade,$codigo);

}
