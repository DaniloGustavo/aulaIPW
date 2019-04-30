<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia();
	$id = filter_input(INPUT_GET, "id");
	$situacao= filter_input(INPUT_GET, "situacao");
	
	$retorno = $listarNoticia->ativarInativar($id,$situacao);
if($retorno) {
	echo"Notícia ativada ou inativa com sucesso";
}else {
	echo "Erro ao ativar ou inativa a notícia";
}	
	
?>	
