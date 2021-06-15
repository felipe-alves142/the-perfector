<?php
include("dbh.inc.php");
class pega{
    var $sql = "SELECT * FROM users;";
    var $stmt;
    var $con;
}
$padrao = new pega;
$sql = $padrao -> sql;
$padrao -> stmt= mysqli_init($conn);
$padrao -> con = mysqli_query($conn,$sql) or die(mysqli_error($conn));



?>