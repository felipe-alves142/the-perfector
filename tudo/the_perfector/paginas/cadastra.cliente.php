<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



<?php

$validation = true;

$cpf = $_POST["cpf"];
$cpf = preg_replace("/[^0-9]/", "", $cpf);
$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
$name = $_POST["name"];
$state = $_POST["state"];
$city = $_POST["city"];
$email = $_POST["email"];
$date_nacimento = $_POST["date"];
$password = $_POST["password"];
$tlf = $_POST["tlf"];
$cll = $_POST["cll"];

$soma =  $cpf[0]*10 + $cpf[1]*9 + $cpf[2]*8 + $cpf[3]*7 + $cpf[4]*6 + $cpf[5]*5 + $cpf[6]*4 + $d7 = $cpf[7]*3 + $d8 = $cpf[8]*2;
$resto = ($soma%11);
$sub = 11 - $resto;
$d10 = $cpf[9];
$cont = 0;
$soma1 =  $cpf[0]*11 + $cpf[1]*10 + $cpf[2]*9 + $cpf[3]*8 + $cpf[4]*7 + $cpf[5]*6 + $cpf[6]*5 + $cpf[7]*4 + $cpf[8]*3 + $cpf[9]*2;
$resto1 = ($soma1%11);
$sub1 = 11 - $resto1;
$d11 =  intval($cpf[10]);


	switch ($cpf) {
		case'11111111111':
			$validation = false;
		break;
		case'22222222222':
			$validation = false;
		break;
		case'33333333333':
			$validation = false;
		break;
		case'44444444444':
			$validation = false;
		break;
		case'55555555555':
			$validation = false;
		break;
		case'66666666666':
			$validation = false;
		break;
		case'77777777777':
			$validation = false;
		break;
		case'88888888888':
			$validation = false;
		break;
		case'99999999999':
			$validation = false;
		break;					
		case($sub == $d10 || $sub == '0' && $sub1 == $d11 || $sub1 == '0'):
			$validation = true;
		break;
		default:
			$validation = false;
		break;
		
	}

	if($validation == true){

	$servername = "localhost";
	$database = "bd_tps";
	$username = "root";
	$senha = "";
		// Cria coneção
	$conn = mysqli_connect($servername, $username, $senha, $database);
		//Testa conexão

	$sql = "INSERT INTO cliente (CPF, nome, email, cidade, estado, telefone, celular, id_imagem, senha, data_nascimento) VALUES ('{$cpf}', '{$name}', '{$email}', '{$city}', '{$state}', '{$tlf}', '{$cll}', 1, MD5('{$password}'), '{$date_nacimento}')";
		if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	mysqli_close($conn);
}else{
	echo "Erro";
}
	

?>

<script>
    window.location.href = "login.html";
</script>
    
</body>
</html>