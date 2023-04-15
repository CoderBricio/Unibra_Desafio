<?php
session_start();
?>

<!--Página inicial do login com redirecionamento cadastro e recuperação de senha-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Unibra</title>
    <link rel="stylesheet" href="./css/LoginStyle.css">

</head>

<body>
    <header>

        <img src="./imagens/unibra-logo.png" alt="Logo da Unibra" class="UnibraLogo">

    </header>

    <main class="ContainerPrincipal">

        <h3 class="Titulo">AUTENTICAÇÃO</h3>

        <p class="Paragráfo">Informe abaixo seu CPF e senha para fazer login no <br> sistema da unibra</p>

        <form action="./PHP/login.php" method="POST">

            <h3 class="Titulo2">CPF</h3>

            <input name="cpf" placeholder="Digite seu cpf" class="Input1">

            <h3 class="Titulo3">SENHA</h3>

            <input name="senha" type="password" placeholder="Digite sua senha" class="Input2">

            <button type="submit" class="Button">Entrar</button>

        </form>

        <button class="Button2"><a href="./Cadastro.php">Cadastrar</a></button>

        <a href="./Pages/RecuperarSenha.php" class="Link">Recuperar minha senha</a>

    </main>

    <div class="Detail"></div>

</body>

<!--Sessão para validar se o usuário existe no banco de dados-->

<?php if (isset($_SESSION['nao_autenticado'])) : ?>
    <p class="Erro">ERRO: Usuário ou senha inválidos</p>
<?php unset($_SESSION['nao_autenticado']);
endif; ?>

<style>
    .Erro {
        position: absolute;
        color: red;
        margin-top: 83%;
    }
</style>

</html>