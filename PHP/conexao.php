

<?php 
//Realiza a conexão com banco de dados.
define('HOST','*******');
define('USUARIO','root');
define('SENHA','*******');
define('DB','UNIBRA');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não foi possivel conectar');


?>