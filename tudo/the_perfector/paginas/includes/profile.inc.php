<?php
session_start();
if(isset($_SESSION['userid'])){
    $email = $_POST["email"];
    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';
   // emailExist($conn,$email);
    
}
