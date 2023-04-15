<?php 
//Faz o código sql inserindo o usuário do formluário da página "Cadastro.PHP" no banco de dados, verifica se ele ja existe ou se o código foi executado com sucesso. ambas alternativas criarão sessões que serão usadas em condicionais para exibir mensagem de erro ou sucesso para o usuário.
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao,trim($_POST['cpf']));
$email = mysqli_real_escape_string($conexao,trim ($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim($_POST['senha']));

$sql = "select count(*) as total from usuarios where CPF = '$cpf'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ../Cadastro.php');
    exit;
}

$sql = "INSERT INTO usuarios (NOME_COMPLETO, CPF, EMAIL, SENHA) VALUES ('$nome','$cpf','$email','$senha');"; 

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastrado'] = true;
}

$conexao->close();

header('Location:../Cadastro.php');
exit;
?>