<?php
session_start();
 
 if(isset($_SESSION["userid"])){
    
    require_once "functions.inc.php";
    require_once "dbh.inc.php";

    $status = $_GET['status'];
    $cod = $_SESSION['co'];
    mudaStatus($conn,$status,$cod);


}else{
    header('location: ../dashboard.php?error=error');
    exit();
}