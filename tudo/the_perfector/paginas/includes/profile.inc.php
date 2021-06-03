<?php
session_start();
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $cara = $_SESSION["useruid"];
    $id= $_SESSION["userid"];
    $senha = $_POST["senha"];
    $repSenha = $_POST["repSenha"];

    require_once 'functions.inc.php';
    require_once 'dbh.inc.php';
  
    if(emailExist($conn,$email)){
       header("location: ../profile.php?error=dadoscadastrado");
       exit();
   }
   if(senhaIgual($senha,$repSenha)){
       header("location: ../profile.php?error=senhadesigual");
       exit(); 
   }
   if( senhaInvalida($senha)){
    header("location: ../profile.php?error=senhainvalida");
    exit(); 
}
    if(invalidEmail($email)){
        header("location: ../profile.php?error=emailinvalido");
        exit(); 
    }
    mudaEmail($conn,$email,$cara);
   
   
   
    mudaSenha($conn,$senha,$cara);
}
