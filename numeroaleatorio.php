<?php
// Gerar número aleatório entre 1 e 1000
@$numero_aleatorio = rand(1,1000);
echo "Tente adivinhar o número entre 1 e 1000.\n";
//loop para permitir que o usuário adivinhe o número
while (true){
    //Ler o palpite do usuário
    $palpite = readline("Digite seu palpite: ");

    // Verificar se o palpite e o um número válido
    if (!is_numeric($palpite)){
        echo "Por favor, digite um número válido.\n";
    }
    //Converter o palpite para um número inteiro
    $palpite = intval($palpite);

    // Verificar se o palpite está correto
    if ($palpite == $numero_aleatorio){
        echo "Parabéns, você acertou.\n";
        break;
    }elseif ($palpite < $numero_aleatorio){
        echo "O número é maior, tente novamente.\n";
    }else{
        echo "O número é menor, tente novamente.\n";
    }
}
?>


}
