<?php
//Crie um script que calcule o desconto de uma compra baseado no valor total:
//Se o valor for maior ou igual a 500, o desconto é de 20%.
//Se o valor for entre 200 e 499, o desconto é de 10%.
//Se o valor for menor que 200, não há desconto.
//O script deve exibir o valor original, o valor do desconto e o preço final.
$valor_compra = 199; 

if ($valor_compra >= 500) {
    $desconto = $valor_compra * 0.2;
} elseif ($valor_compra >= 200) {
    $desconto = $valor_compra * 0.1;
} else {
    $desconto = 0;
}

$preco_final = $valor_compra - $desconto;

echo "Valor original: R$ " . number_format($valor_compra, 2, ',', '.') . "<br>";
echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "Preço final: R$ " . number_format($preco_final, 2, ',', '.') . "<br>";
?>