

<?php 
//Realiza a conexão com banco de dados, alguns dados estarão censurados no github.
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','Marecad2@');
define('DB','UNIBRA');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não foi possivel conectar');


?>