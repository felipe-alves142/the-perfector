  
<?php

/*Cadastro validação */
function emptyInputSignup($user,$senha,$repsenha,$email,$estado,$cidade,$cpf,$data,$celular){
    /*Funçao que checa se os campos estão vazios */
    $result = "";
    if(empty($user) || empty($senha) || empty($repsenha) || empty($email) || empty($estado) || empty($cidade) || empty($cpf) || empty($data) || empty($celular) ){
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
function createUser($conn,$email,$user,$senha,$estado,$cidade,$cpf,$data,$celular){
    /*Criando uma conta no bd
    adicinando dados no bd
    */
    $sql = "INSERT INTO users (userUid,userEmail,userPwd,estado,cidade,cpf,dataNascimento,celular) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfalho");
    exit();
}   
    $hashPass = password_hash($senha,PASSWORD_DEFAULT); 
    // código que disfarça a senha no banco de dados
    mysqli_stmt_bind_param($stmt,"ssssssss",$user,$email ,$hashPass,$estado,$cidade,$cpf,$data,$celular);
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
        
       header("location: ../dashboard.php");
        exit();
    }
}
  function campovazio($titulo,$categoria,$descricao,$subcategoria){
    $result="";
    if(empty($titulo) || empty($categoria) || empty($descricao) || empty($subcategoria) !== false){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
  } 
  
  function guardaPedido($conn,$titulo,$categoria,$descricao,$subcategoria,$anexar,$orcamento){
      $sql="INSERT INTO pedido(titulo,categoria,descricao,suB,pedidoUser,anexo,orcamento) VALUES (?,?,?,?,?,?,?);";
      $stmt= mysqli_stmt_init($conn);  
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../pedido.php?error=stmtfalho");
        exit();
      }  
      session_start();
      $cara= $_SESSION["useruid"];
      mysqli_stmt_bind_param($stmt,'sssssss',$titulo,$categoria,$descricao,$subcategoria,$cara,$anexar,$orcamento);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      

      header("location: ../dashboard.php");
      exit();
    }
 function guardaOrcamento($conn,$c,$orcaEmpresa,$cara){
    $sql = "INSERT INTO orcamento(idOr,orca,userOR) VALUES (?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../mais.php?error=stmtfalho");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt,"sss",$c,$orcaEmpresa,$cara);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header('location: ../dashboardEmpresa.php');
    exit();
 }

function emptyOrca($orcaEmpresa){
    $result='';
    if(empty($orcaEmpresa)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function mudaStatus($conn,$status){
    
    $sql = "UPDATE orcamento SET status = ? WHERE idOr = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../dashboard.php?error=stmtfalho");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $status,$cod);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../dashboard.php');
    
    exit();
}
/*
    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../profile.php?error=dadoscadastrados");
        exit();
    }else{
        header("location: ../profile.php?error=none");
        exit();    
    }
    mysqli_stmt_bind_param($stmt, "s" , $email);
    mysqli_stmt_execute($stmt);
    
    $resulData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resulData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}

