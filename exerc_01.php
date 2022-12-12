<?php
echo (" 1)leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser
//apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este
//deverá ser apresentado subtraindo-se 5:<br><br>");

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
