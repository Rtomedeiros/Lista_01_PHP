<?php
$a = 10;
$b = 10;

$soma = $a + $b;

if ($soma > 20) {
    //Soma eh maior que 20.
    $resultado = $soma + 8;
    echo ("Soma + 8 = $resultado");
} else {
    //Caso contrário, soma eh menor ou igual a 20.
    $resultado = $soma - 5;
    echo ("Soma - 5 = $resultado");
}
