<?php
//Lista de Compras com Foreach
//Desafio: Crie um array chamado $produtos com os itens: "Arroz", "Feijão", "Macarrão". 
//Use o foreach para exibir esses itens dentro de uma lista de marcadores do HTML (<ul> e <li>).
$Produto = ["Arroz", "Feijão", "Macarrão"];
echo "<ul>";
foreach ($Produto as $item) {
    echo "<li>Produto: $item</li>";
}
echo "</ul>";
?>

<?php
//Exemplo do Professor
$alunos = ["Ana", "Bruno", "Carla"];

foreach ($alunos as $nome) {
    echo "Aluno: $nome <br>";
}
?>