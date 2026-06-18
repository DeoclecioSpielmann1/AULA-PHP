<?php
define ("NOME_DA_LOJA", "Loja de pi");
$nome_produto = "codigo PHP";
$preco = 10.50;
$quantidade = 5;
$total = $preco * $quantidade;
echo "===" . NOME_DA_LOJA . "===<br>";
echo " Produto: " . $nome_produto . "<br>";
echo "quantidade: " . $quantidade . "<br>";
echo " Total: R$ " . number_format($total, 2) . "<br>";
?>