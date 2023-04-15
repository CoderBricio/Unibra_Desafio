
<?php
//Não permite entrar no dashboard sem fazer login
if(!$_SESSION['usuario']){
    header('Location: ../index.php');
}
?>