<?php
"Olá Mundo, seja bem vindo a Tabuada PHP!!!";

$tabuada = (int)readline("Digite um número inteiro positivo ");
for ($i = 1; $i <= $tabuada; $i++){
    if ($tabuada % $i == 0)
    echo "$i ";

}
?>

