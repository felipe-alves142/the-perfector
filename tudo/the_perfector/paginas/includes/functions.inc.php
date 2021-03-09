<?php
function emptyInputSignup($user,$senha,$repsenha,$email){
    $result = true;
    if(empty($user) || empty($senha) || empty($repsenha) || empty($email)){
        $result = true;
    }
else{
        $result = false;
    }
    return $result;
}
function invalidUid($user){
    $result =true;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$user)){
     $result = true;
}
else{
     $result = false;
}    
 return $result;
}
function invalidEmail($email){
    $result = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function senhaIgual($senha,$repsenha){
    $result = true;
    if($senha !== $repsenha){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function dadoVa($conn,$user,$email){
    $sql = "SELECT * FROM users WHERE userUid = ? or userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=emptypass");
    exit();
}   
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
function createUser($conn,$user,$email){
    $sql = "INSERT INTO users (userEmail,userUid,userPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfailad");
    exit();
}   
    $hashPass = password_hash($senha, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sss",$user,$email,$hashPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}