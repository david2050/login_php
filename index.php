<?php
session_start();

if(!$_SESSION["usuario"]){
    echo '<meta http-equiv="Refresh" content="0; url=\'login.html\'" />';
    exit;
}
echo "Seja bem vindo ao sistema ".$_SESSION["nome_usuario"];
?>
<br />
<a href="logout.php">Sair do sistema</a>

