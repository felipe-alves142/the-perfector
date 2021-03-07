<?php


$serverName="localhost";
$dBUserName="root";
$dBPassoword="";
$dBName="phpperfector";

 $conn = mysqli_connect($serverName,$dBUserName,$dBPassoword,$dBName);

 if(!$conn){
     die("Falha na Conexão". mysqli_connect_error());
 }