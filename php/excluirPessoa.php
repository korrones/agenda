<?php
require_once('conexaoBanco.php');

$idPessoa=$_POST['idPessoa'];

$verCompromisso="SELECT * FROM compromissos_pessoas WHERE pessoas_idPessoa=".$idPessoa;

$resultadoComp = mysqli_query($conexao, $verCompromisso);
$linha = mysqli_num_rows($resultadoComp);

if($linha==0) {
    $comandoFoto = "SELECT foto FROM pessoas WHERE idPessoa=".$idPessoa;
    $resultadoFoto = mysqli_query($conexao, $comandoFoto);
    $foto = mysqli_fetch_assoc($resultadoFoto);
    if($foto['foto']!=""){
    unlink("../fotos/".$foto['foto']);
    }

    $comandoExclusao="DELETE FROM pessoas WHERE idPessoa=".$idPessoa;
    $resultadoExclusao = mysqli_query($conexao, $comandoExclusao);

    if($resultadoExclusao) {
        header("Location: pessoaForm.php?retorno=2");
    }

} else {
    header("Location: pessoaForm.php?retorno=3");
}