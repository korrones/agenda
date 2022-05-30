<?php

require_once("conexaoBanco.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$foto=$_FILES['foto']['name'];
$idRelacao=$_POST['idRelacao'];

$extensao= strtolower(substr($foto, -4));
echo "extensao do arquivo:".$extensao;

$novonomeFoto = date("Y.m.d-H.i.s") . $extensao;
$pasta="../fotos/";

move_uploaded_file($_FILES['foto']['name'], $pasta, $novoNomeFoto);





?>