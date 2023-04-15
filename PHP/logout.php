
<?php 
//Fecha a sessão do usuário e o retorna para a página de login
session_start();
session_destroy();
header('Location: ../index.php');
exit();
?>