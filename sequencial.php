<?php
"Olá Mundo, seja bem vindo ao Sequencial PHP!!!";
$resultado = 0;
$quantia = 0;

echo "Digite uma sequência de números POSITIVOS, e termine com um número negativo\n";
while (true){
   $numero = readline("Digite um número: ");

   if ($numero < 0){
       break;
   }
    if ($numero >= 0){
        $resultado += $numero;
        $quantia++;
    }

    if ($quantia > 0){
        $media = $resultado / $quantia;
        echo"A média dos números positivos e $media";
    }
    else{
        echo "Nenhum número positivo foi inserido";
    }
}
?>