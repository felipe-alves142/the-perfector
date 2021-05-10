<?php 
 if(isset($_POST['submit'])){
    
    $orcaEmpresa=$_POST['muorca'];     
    require_once '../includes/functions.inc.php';
    require_once '../includes/dbh.inc.php';        
   
    if(emptyOrca($orcaEmpresa) !== false){
        header("location: ../mais.php?error=wo");
        exit();
}
 session_start();
 $cara=$_SESSION["useruid"];
 $c=$_SESSION['co'];
 guardaOrcamento($conn,$c,$orcaEmpresa,$cara);
}
 
 