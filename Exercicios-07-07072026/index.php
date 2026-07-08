<?php
//O "Pelo menos um" com Do-While
//Desafio: Crie uma variável $limite = 0. Use o do-while para imprimir a frase "Processando item..." 
//e faça o loop parar imediatamente (condição falsa). Mostre que a frase apareceu mesmo o limite sendo zero
$limite = 0;
do {
    echo "Processando item: $limite <br>";
    $limite++;
} while ($limite < 0);
?>


<?php
//Do While - exemplo do Professor
$i = 10;

do {
    echo "Eu executei pelo menos essa vez, mesmo sendo 10! <br>";
    $i++;
} while ($i < 5); // A condição é falsa, mas o código rodou uma vez acima.
?>
