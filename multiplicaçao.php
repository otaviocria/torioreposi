<?php
"Olá Mundo, seja bem vindo a Tabuada PHP!!!";

$tabuada = (int)readline("Digite um número positivo ");
for ($i = 1; $i <= $tabuada; $i++){
    $resposta = $tabuada*$i;
    echo "$tabuada * $i = $resposta".
        PHP_EOL;
}
?>