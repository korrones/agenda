<?php
require_once("conexaoBanco.php");

$descricao=$_POST['descricao'];
$tipoCompromisso=$_POST['idTipo'];
$dataInicio=$_POST['dataInicio'];
$dataFim=$_POST['dataFim'];
$hora=$_POST['hora'];
$local=$_POST['local'];
$cep=$_POST['cep'];
$numero=$_POST['numero'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$obs=$_POST['obs'];

$idPessoas=array();
$idPessoas=$_POST['idPessoa'];

//echo "ID das pessoas que foram selecionadas para o compromisso <br>";
//for($i=0; $i<sizeof($idPessoas);$i++){
//  echo "ID das pessoas que foram selecionadas para o compromisso <br>";
// echo $idPessoas[$i]."<br>";
//}

$comando="INSERT INTO  compromissos
(dataInicio, dataFim, hora, descricao, local, rua, bairro, cidade, estado, cep, numero, observacao, tiposCompromissos_idTipo)
VALUES
('".$dataInicio."',
'".$dataFim."',
'".$hora."',
'".$descricao."',
'".$local."',
'".$rua."',
'".$bairro."',
'".$cidade."',
'".$estado."',
'".$cep."',
".$numero.",
'".$obs."',
".$tipoCompromisso.")";

//echo $comando; arrumar o erro mysql 

$resultado=mysqli_query($conexao, $comando);
$compRegistro="";






?>