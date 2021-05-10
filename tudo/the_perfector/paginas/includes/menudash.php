<head>
    <link rel="stylesheet" href="../../styles/menudash.css">
    <link rel="stylesheet" href="../../styles/dashboard.css">

</head>
<body>

    <ul>
        <li ><a href="dashboard.php" >Dashboard</a></li>
        <li>Explorar</li>
        
    </ul>
<nav id="menu">
        
        <li><img id="prof" src="../../imagens/usuario.png"></li>
    
        <ul id="subm">
        
            <?php
                
              echo "<li><a href='includes/logout.inc.php'>Sair</a></li>";
            
                
            ?>
            </ul>

</nav>    
</body>
</html>