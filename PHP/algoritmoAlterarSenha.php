<?php 
//Algoritmo para alterar o dado "senha" na tabela do banco de dados usando como "where" o cpf do usuário logado na sessão, caso o código sql seja executado corretamente criará uma sessão que será usada em uma condicional para exibir "sucesso" para o usuário
session_start();
include("conexao.php");

$novaSenha = mysqli_real_escape_string($conexao,$_POST['novasenha']);
$novaSenhaC = mysqli_real_escape_string($conexao,$_POST['novasenhaC']);
$cpf= $_SESSION['usuario'];

if($novaSenha == $novaSenhaC){
    $sql= "UPDATE usuarios SET SENHA = '$novaSenhaC' WHERE CPF ='$cpf' ";
    
}else{
    $_SESSION['SenhasDiferentes']= true;
    header('Location: ../Pages/AlterarSenha.php');
    exit();
}

if($conexao ->query($sql) === true){
    $_SESSION['alteração'] = true;
}

$conexao->close();
header('Location:../Pages/AlterarSenha.php');
exit;
