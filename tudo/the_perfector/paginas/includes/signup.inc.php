<?php

if (isset($_POST["submit"])){
    $user = $_POST["usuario"];
    $senha =$_POST["senha"];
    $repsenha=$_POST["repSenha"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if(emptyInputSignup($user,$senha,$repsenha,$email) !== false){
        header("location: ../signup.php?error=Campovazio");
        exit();
    }   
    if(invalidUid($user) !== false){
        header("location: ../signup.php?error=emptyuid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=emailinvalido");
        exit();
    }
    if(senhaIgual($senha,$repsenha) !== false){
        header("location: ../signup.php?error=emptypass");
        exit();
    }
    if(uidExist($conn,$user,$email)!==false){
        header("location: ../signup.php?error=emptypass");
        exit(); 
    }
    createUser($conn,$email,$user,$senha);
}
else {
    header("location: ../signup.php");
    exit();
}