<?php
//Crie um sistema que valide se um usuário pode acessar um sistema restrito.
//Crie uma variável $usuario_cadastrado e atribua o nome "admin".
//Crie uma variável $senha_correta e atribua o valor "1234".
//Crie duas novas variáveis: $tentativa_usuario e $tentativa_senha com valores que você escolher.
//Crie uma variável booleana chamada $acesso_concedido que compare se o usuário digitado é igual ao cadastrado E se a senha digitada é igual à correta.
//Use o comando var_dump() para exibir o resultado final do acesso.
$usuario_cadastrado = "admin";
$senha_correta = "1234";
$tentativa_usuario = "admin";
$tentativa_senha = "1234";
$acesso_concedido = ($tentativa_usuario === $usuario_cadastrado) && ($tentativa_senha === $senha_correta);
var_dump($acesso_concedido);
?>