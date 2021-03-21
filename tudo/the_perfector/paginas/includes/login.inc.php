<?php

    if(isset($_POST["submit"])){
        $user = $_POST["usuario"];
        $senha = $_POST["senha"];

        include_once "functions.inc.php";
        include_once "dbh.inc.php";
        if (emptyInputLogin($user,$senha) !== false){
            header("location: login.php?error=emptypass");
            exit();
        }
        loginUser($conn,$user,$senha);
    }
    else{
        header("location: login.php");
        exit();
    }


