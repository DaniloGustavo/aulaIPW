<?php	
include ("noticia.php");
$listarNoticia = new noticia();
$valor = $listarNoticia->buscarTodos();

print_r($valor);
?>
<table border="1">
<th>item</th>
<th>Titulo</th>
<th>Autor</th>
<th>Ação</th>
<tr>
			
<td></td>
<td></td>
<td></td>
<td></td>
