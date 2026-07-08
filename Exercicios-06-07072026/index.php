<?php
//Contador Regressivo com While
//Desafio: Crie um cronômetro que começa em 10 e vai até 0, exibindo os números na tela. Ao final, exiba "Fogo!"
$contador = 10;
while ($contador >= 0) {
    echo $contador . "<br>";
    $contador--;
}
echo "Fogo!";
?>

<?php
//Contador Crescente com While - exemplo do Professor
$contador = 1;

while ($contador <= 3) {
    echo "Passo número: $contador <br>";
    $contador++; // Importante: se não aumentar, o loop nunca para!
}
?>