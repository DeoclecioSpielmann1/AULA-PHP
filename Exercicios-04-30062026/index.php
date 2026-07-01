<?php
//Crie um sistema que verifica se uma variável booleana $esta_logado é verdadeira ou falsa.
//Use o Operador Ternário para guardar em uma variável $mensagem o texto "Bem-vindo ao sistema!" caso seja true, 
//ou "Por favor, faça login" caso seja false.
//Exiba o conteúdo da variável $mensagem.
$esta_logado = false;
$mensagem = $esta_logado ? "Bem-vindo ao sistema!" : "Por favor, faça login";
echo $mensagem;
?>