<?php 
//Verifica se o usuário existe no banco de dados, e atribui a sessão "usuario o seu cpf"
session_start();
include('conexao.php');

if(empty($_POST['cpf']) || empty($_POST['senha'])){
    header('Location: ../index.php');
    exit();
}
$cpf = mysqli_real_escape_string($conexao,$_POST['cpf']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);


$query = "select id_usuario, NOME_COMPLETO from usuarios where CPF = '{$cpf}' and SENHA = '{$senha}'";


$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row ==1){
$_SESSION['usuario'] = $cpf;
header('Location:../Pages/BemVindo.php');
exit();
}else{
$_SESSION['nao_autenticado'] = true;
header('Location: ../index.php');
exit();
}

?>