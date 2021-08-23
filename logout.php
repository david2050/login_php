<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["nome_usuario"]);

echo '<meta http-equiv="Refresh" content="0; url=\'login.html\'" />';