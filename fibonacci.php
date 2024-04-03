<?php
"Olá Mundo, seja bem vindo a Tabuada PHP!!!";
function fibonacci($o){
    if ($o==0){
        return 0;
    }
     elseif ($o==1){
        return 1;
    }else{
        return fibonacci($o-1) +fibonacci($o-2) ;
    }
}
{
    echo "Os primeiros 10 números  da sequencia de fibonacci\n";
    for ($o = 0; $o < 10; $o++){
        echo fibonacci($o) . " ";
    }
}
?>