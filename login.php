<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
if($usuario == "" OR $senha == ""){
    echo "É necessário informar usuario e senha";
    exit;
}

$mysql_host = "localhost";
$mysql_user = "teste";
$mysql_pass = "teste";
$mysql_db = "curso_login";

$con = new PDO("mysql:host=$mysql_host;dbname=$mysql_db", $mysql_user, $mysql_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'", PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
$sql = $con->prepare($sql);
$sql->bindParam('usuario', $usuario);
$sql->bindParam('senha', $senha);
$sql->execute();

if($sql->rowCount() == 0){
    echo "Nome de usuário ou senha inválidos";
    exit;
}

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $nome_usuario = $row["nome"];
}

session_start();
$_SESSION["usuario"] = $usuario;
$_SESSION["nome_usuario"] = $nome_usuario;
echo '<meta http-equiv="Refresh" content="0; url=\'index.php\'" />';

