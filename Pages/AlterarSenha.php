<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/AlterarSenhaStyle.css">
    <title>Alterar Senha</title>
</head>
<body style="background-image: url('../imagens/bg-extensao.png');">
    <header>

     <img src="../imagens/unibra-logo.png" alt="Logo da Unibra" class="UnibraLogo">

    </header>

    <main class="ContainerPrincipal">

     <h3 class="Titulo">ALTERAR SENHA</h3>

     <p class="Paragráfo">informe abaixo sua nova senha.</p>

     <form action="../PHP/algoritmoAlterarSenha.php" method="POST">

      <h3 class="Titulo2">Nova senha</h3>

      <input name="novasenha" placeholder="Digite sua senha" class="Input1">

      <h3 class="Titulo3">Confirme sua senha</h3>
      
      <input name="novasenhaC" placeholder="Digite sua senha novamente" class="Input2">

      <button type="submit" class="Button">Atualizar Senha</button>

     </form>

     <a href="./BemVindo.php" class="Link">Voltar</a>

     <!--Verifica qual sessão foi criada no algoritmo de alteração de senha, exibindo o respectivo resultado-->
     <?php if(isset($_SESSION['SenhasDiferentes'])):?>
     <P class="Erro">ERRO as senhas não coincidem</P>
     <?php 
    unset($_SESSION['SenhasDiferentes']);
    endif; ?>

    <?php if(isset($_SESSION['alteração'])):?>
    <p class="Sucesso">Alteração realizada com sucesso!</p>
    <?php 
    unset($_SESSION['alteração']);
    endif;
    ?>

    </main>


    <div class="Detail"></div>

</body>
</html>