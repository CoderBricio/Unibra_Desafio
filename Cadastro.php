<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/CadastroStyle.css">
</head>

<body>

    <header>

        <img src="./imagens/unibra-logo.png" alt="Logo da Unibra" class="UnibraLogo">

    </header>

    <main class="ContainerPrincipal">

        <h3 class="Titulo">CADASTRO</h3>

        <p class="Paragráfo">Informe os dados abaixo para poder se cadastrar no<br> sistema.</p>

        <form action="./PHP/cadastrar.php" method="POST">

            <h3 class="Titulo2">NOME COMPLETO</h3>

            <input name="nome" placeholder="Digite seu nome completo" class="Input1">

            <h3 class="Titulo3">CPF</h3>

            <input name="cpf" placeholder="Digite seu cpf" class="Input2">

            <h3 class="Titulo4">EMAIL</h3>

            <input name="email" placeholder="Digite seu email" class="Input3">

            <h3 class="Titulo5">Senha</h3>

            <input name="senha" placeholder="Digite sua senha" class="Input4">

            <button type="submit" class="Button">Cadastrar</button>

            <a href="./index.php" class="Button2">Voltar</a>

        </form>

    </main>

    <div class="Detail"></div>

</body>

<!-- Mensagens de erro e sucesso verificando sessôes, coloquei o estilo css dessas mensagens inline para diminuir o tempo de carregamento da página, tendo em vista que não são de visualização rápida  -->

<?php if (isset($_SESSION['usuario_existe'])) : ?>
    <p class="Erro">ERRO: Usuário já existe no banco de dados</p>
<?php unset($_SESSION['usuario_existe']);
endif; ?>

<?php if (isset($_SESSION['status_cadastrado'])) : ?>
    <p class="Sucesso">Usuário cadastrado com sucesso!</p>
<?php unset($_SESSION['status_cadastrado']);
endif; ?>

<style>
    .Erro {
        position: absolute;
        color: red;
        margin-top: 105%;
    }

    .Sucesso {
        position: absolute;
        color: green;
        margin-top: 105%;

    }


    .ContainerPrincipal {
        margin-top: 55%;
    }

    .Detail {
        margin-top: 99%;
    }
</style>

</html>