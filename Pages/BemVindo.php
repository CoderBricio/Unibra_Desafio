<?php 
session_start();
include('../PHP/verificaLogin.php')

?>
<!--Página do dasboard-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="../css/BemVindoStyle.css">
</head>
<body>
    <header>

     <img src="../imagens/unibra-logo.png" alt="Logo da Unibra" class="UnibraLogo">

    </header>

    <main class="ContainerPrincipal">

     <h3 class="Titulo">DASHBOARD</h3>

     <p class="Paragráfo">Parabéns, você está logado no sistema de testes</p>

     <h2 class="Titulo2">olá, usuário com cpf de <?php echo $_SESSION['usuario']?></h2>

     <button class="Button2"><a class="Link" href="./AlterarSenha.php">Mudar senha</a></button>

     <h2> <a class="Sair" href="../PHP/logout.php">sair</a></h2>
     

    </main>

    <div class="Detail"></div>

</body>
</html>

    