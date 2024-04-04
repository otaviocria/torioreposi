<?php
function bubbleSort($arr){
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++){
        for ($j = 0; $j < $n - $i - 1; $i++){
            if ($arr[$j]> $arr[$j + 1]) {
                //Trocar elementos $arr[$j] e $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr [$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
// Exemplo de uso
$array = [64, 34, 25, 13, 22, 11, 90];
echo "Array original: ".implode(",", $array) . "\n";

// Chamada da função de ordenação
$arrayOrdenado = bubbleSort($array);

echo "Array ordenado: " .implode("," , $arrayOrdenado). "\n";
?>