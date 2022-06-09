<?php

$usuario="root";
$senha=""; //o seu pode ser root
$local="127.0.0.1"; //o seu pode ser localhost
$banco="agenda";

$conexao=mysqli_connect($local, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");


?>