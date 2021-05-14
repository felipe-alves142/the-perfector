<?php
session_start();
 
 if(isset($_SESSION["userid"])){
    
    require_once "functions.inc.php";
    require_once "dbh.inc.php";

    $status = $_GET['status'];
    mudaStatus($conn,$status);


}else{
    header('location: ../dashboard.php?error=error');
    exit();
}