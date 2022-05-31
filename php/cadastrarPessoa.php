<?php

require_once("conexaoBanco.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$foto=$_FILES['foto']['name'];
$idRelacao=$_POST['idRelacao'];

$extensao= strtolower(substr($foto, -4));


$novoNomeFoto = date("Y.m.d-H.i.s") . $extensao;
$pasta="../fotos/";

move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$novoNomeFoto);

$comando= "INSERT INTO pessoas (nome, sobrenome, email, foto, relacoes_idRelacao) VALUES ('".$nome."','".$sobrenome."','".$email."','".$novoNomeFoto."', $idRelacao)";

echo $comando;

$resultado= mysqli_query($conexao, $comando);
if($resultado){
    header("Location: pessoaForm.php?retorno1");
    header("Location: pessoaForm.php?retorno2");
}





?>