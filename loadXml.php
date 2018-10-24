<?php 

$arquivo = new DomDocument();
$arquivo->load($_FILES['archive']['tmp_name']);
$linhas = $arquivo->getElementsByTagName("Test");


foreach ($linhas as $linha) {
	$nome = $linha->getElementsByTagName("Name")->item(0)->nodeValue;
	echo "Nome: $nome <br>";
}

?>