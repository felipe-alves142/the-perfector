<?php

if (isset($_POST["submit"])){
    $user = $_POST["usuario"];
    $senha =$_POST["senha"];
    $repsenha=$_POST["repSenha"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    //if(emptyInputSignup() !== false){

    //}
}
else{
    header('Location: ../paginas/signup.php');
    exit;


}

?>