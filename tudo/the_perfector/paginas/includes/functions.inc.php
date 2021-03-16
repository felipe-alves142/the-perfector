<?php

/*Cadastro validação */
function emptyInputSignup($user,$senha,$repsenha,$email){
    /*Funçao que checa se os campos estão vazios */
    $result = "";
    if(empty($user) || empty($senha) || empty($repsenha) || empty($email)){
        $result = true;
    }
else{
        $result = false;
    }
    return $result;
}
function invalidUid($user){
    /*Checando se o usuario é valido */
    $result ="";
    if(!preg_match("/^[a-zA-Z0-9]*$/",$user)){
     $result = true;
    }
    else{
     $result = false;
    }    
    return $result;
    }
function invalidEmail($email){
    /*Checando se o email é valido */
    $result ="";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
  }
    return $result;
}
function senhaIgual($senha,$repsenha){
    /*Checando se as senhas são iguais */
    $result ="";
    if($senha !== $repsenha){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function senhaInvalida($senha){
    $result = "";
    $c = strlen($senha);
    $padraoSenha = "/^[a-zA-Z0-9@*!%;:.]{8}$/";
    if($c <> 8) {
        $result = true;
    
    if(preg_match($padraoSenha,$senha)){
        $result = true;    
    }
   }
    else{
        $result = false;
    }
    return $result;
}


function uidExist($conn,$user,$email){
    /*Checando se o usuario ou email existe*/
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=dadoscadastrados");
    exit();
}   


    /* */
    mysqli_stmt_bind_param($stmt,"ss",$user,$email);
    mysqli_stmt_execute($stmt);

    $resulData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resulData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
    
function createUser($conn,$email,$user,$senha){
    /*Criando uma conta no bd */
    $sql = "INSERT INTO users (userUid,userEmail,userPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfalho");
    exit();
}   
    $hashPass = password_hash($senha,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sss",$user,$email,$hashPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}



function emptyInputLogin($user,$senha){
    $result = true;
    if(empty($user) || empty($senha)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


/*Login validação*/
function loginUser($conn,$user,$senha){
    include_once "dbh.inc.php";

    $uidExist = uidExist($conn,$user,$user);
    if($uidExist === false){
          header("location: login.php?error=wronglogin");
          exit();
    }
    $pwdHashd = $uidExist["userPwd"];
    $checkPwd = password_verify($senha,$pwdHashd);

    if($checkPwd === false){
        header("location: login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"]=$uidExist["userId"];
        $_SESSION["useruid"]=$uidExist["userUid"];
        header("location: ../index.php");
        exit();
    }
}