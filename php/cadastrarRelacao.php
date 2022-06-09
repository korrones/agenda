<?php
require_once("conexaoBanco.php");

$descricao=$_POST['descricao'];

$comando="INSERT INTO relacoes (descricao) VALUES ('".$descricao."')";
//faça o echo aqui antes, tá...
$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: relacaoForm.php?retorno=1");
}else{
    header("Location: relacaoForm.php?retorno=0");
}

?>