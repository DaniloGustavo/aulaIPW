<?php
include_once("noticia.php");
$objetoNoticia = new noticia();
//fazer o formulario
 
 if(filter_input(INPUT_POST, "titulo") &&
 	filter_input(INPUT_POST, "descricao") &&
 	filter_input(INPUT_POST, "autor") &&
 	filter_input(INPUT_POST, "dataPublicacao") &&
	filter_input(INPUT_POST, "curso") 
	
	) {


$titulo =  filter_input(INPUT_POST, "titulo");
$descricao = filter_input(INPUT_POST, "descricao");
$autor = filter_input(INPUT_POST, "autor");
$dataPublicacao = filter_input(INPUT_POST, "dataPublicacao");
$curso = filter_input(INPUT_POST, "curso");

$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso );
	$objetoNoticia->cadastrar($dados);
}else {
	echo "OS CAMPOS NÃO FORAM PREENCHIDOS!!!";
}
	
	?>