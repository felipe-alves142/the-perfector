<?php

if (isset($_POST["submit"])){    
    $user = $_POST["usuario"];
    $senha = $_POST["senha"];
    $repsenha=$_POST["repSenha"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $cpf=$_POST["cpf"];
    $data = $_POST["data"];
    $celular = $_POST["celular"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if(emptyInputSignup($user,$senha,$repsenha,$email,$estado,$cidade,$cpf,$data,$celular) !== false){
        header("location: ../signup.php?error=Campovazio");
        exit();
    }   
    if(invalidUid($user) !== false){
        header("location: ../signup.php?error=usuarioinvalido");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=emailinvalido");
        exit();
    }
    if(senhaIgual($senha,$repsenha) !== false){
        header("location: ../signup.php?error=senhadesigual");
        exit();
    }
    if(uidExist($conn,$user,$email)!==false){
        header("location: ../signup.php?error=jacadastrado");
        exit(); 
    }
    if(senhaInvalida($senha) !== false){
        header("location: ../signup.php?error=senhainvalida");
        exit();
    }
    /*Criando um novo usuario no banco de dados */
    createUser($conn,$email,$user,$senha,$estado,$cidade,$cpf,$data,$celular);
}
else {
    header("location: ../signup.php");
    exit();
}