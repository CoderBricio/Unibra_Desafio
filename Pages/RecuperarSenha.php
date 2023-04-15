<?php 
//Algoritmo para mandar um EMAIL para o usuário com uma senha temporária, para que assim ele possa acessar a plataforma e alterar para uma senha do seu gosto.
include('../PHP/conexao.php');


if(isset($_POST['ok'])){
    $senhaTemporaria= substr(md5(time()),0,6);
    $cpf = $msqli->escape_string($_POST('cpf'));

    $sql_code ="UPDATE usuarios SET SENHA = '$senhaTemporaria' WHERE CPF='$cpf'";
    $sql_query = $mysqli->query($sql_code) or die($msqli->error);

    $consulta = mysqli_query($conexao, "SELECT EMAIL FROM usuarios WHERE CPF = $cpf");
    $usuario = mysqli_fetch_object($consulta);
    $email = $usuario->email;

    mail($email,"Sua senha Temporária","Olá, use essa senha temporária para conseguir seu acesso a plataforma, apos acessar recomendados usar a funçâo 'Mudar senha' para conseguir uma nova senha da sua escolha." . $senhaTemporaria);  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="../css/RecuperarSenhaStyle.css">
</head>
<body>
    <header>

     <img src="../imagens/unibra-logo.png" alt="Logo da Unibra" class="UnibraLogo">

    </header>

    <main class="ContainerPrincipal">

     <h3 class="Titulo">RECUPERAR SENHA</h3>

     <p class="Paragráfo">Informe abaixo seu CPF e para recuperar sua senha,
      enviaremos um link para o email cadastrado.</p>

     <form action="" method="">

      <h3 class="Titulo2">CPF</h3>

      <input name="cpf" placeholder="Digite seu cpf" class="Input1">

      <button type="submit" name="ok" value="ok" class="Button">Entrar</button>

     </form>

     <a href="../index.php" class="Link">Voltar</a>

    </main>

    <div class="Detail"></div>

</body>
    

</html>