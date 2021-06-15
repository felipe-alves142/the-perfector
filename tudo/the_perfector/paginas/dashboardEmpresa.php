<?php 
  session_start();
  include_once "includes/dadosPega.php";
  $nome= strval($_SESSION["useruid"]);

  $p1 = new Pega();
  //$sql = "SELECT * FROM orcamento WHERE status = Aprovado AND userOR = $nome;"
  $sql = $p1 -> sql ="SELECT * FROM orcamento,pedido WHERE (idOr LIKE Peid) AND pedidoUser = '$nome' AND status = 'Recebido';";
  $stmt = $p1 -> stmt= mysqli_init($conn);
  $con = $p1 -> con = mysqli_query($conn,$sql) or die(mysqli_error($conn));
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="../imagens/logo-icon.svg"> 
    <link rel="stylesheet" href="../styles/foote.css">
    <link rel="stylesheet" href="../styles/dashboardEmpres.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Empresa</title>
</head>
<body>
<style>
    a{
        color:#FFFFFF;
        text-decoration: none;
    }
</style>
<?php include_once "includes/menu.php";
            ?>
             
<div id="trabalhos">
    <?php while($dado = $con -> fetch_array()){?>
        <?php echo "<h6>Descrição:</h6><p>".$dado["descricao"]."</p>"?>
        <?php echo"<h6>Cliente:</h6><p>".$dado["userOR"]."</p>";?>
        <a id='verMais' href="maisDatelhes.php">Ver mais detalhes
            <svg width='50' height='50' viewBox='0 0 67 66' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M45.3789 30.9375H35.582V21.1406C35.582 20.857 35.35 20.625 35.0664 20.625H31.9727C31.6891 20.625 31.457 20.857 31.457 21.1406V30.9375H21.6602C21.3766 30.9375 21.1445 31.1695 21.1445 31.4531V34.5469C21.1445 34.8305 21.3766 35.0625 21.6602 35.0625H31.457V44.8594C31.457 45.143 31.6891 45.375 31.9727 45.375H35.0664C35.35 45.375 35.582 45.143 35.582 44.8594V35.0625H45.3789C45.6625 35.0625 45.8945 34.8305 45.8945 34.5469V31.4531C45.8945 31.1695 45.6625 30.9375 45.3789 30.9375Z' fill='#2AE876'/>
                <path d='M33.5195 4.125C17.5738 4.125 4.64453 17.0543 4.64453 33C4.64453 48.9457 17.5738 61.875 33.5195 61.875C49.4652 61.875 62.3945 48.9457 62.3945 33C62.3945 17.0543 49.4652 4.125 33.5195 4.125ZM33.5195 56.9766C20.2809 56.9766 9.54297 46.2387 9.54297 33C9.54297 19.7613 20.2809 9.02344 33.5195 9.02344C46.7582 9.02344 57.4961 19.7613 57.4961 33C57.4961 46.2387 46.7582 56.9766 33.5195 56.9766Z' fill='#2AE876'/>
            </svg> </a> 
        
    <?php }?>
     
</div>      
 <a id="explorar" href="../paginas/display.php" >Explorar</a>
<div id="sideMenu">
    <ul id="sideMenuList">
       <h5><li>Últimas Avaliações</li> </h5>  <br> <br>
       <h5> <li>Meus Serviços</li></h5>   <br> <br>
       <h5><li>Agenda</li></h5> 
    </ul>
</div>
<div>
<?php include_once "includes/footer.php";?>

</div>
</body>
</html>