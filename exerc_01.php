<form method="get">
    <label>a =</label>
    <input type="text" name="a"> </br>
    <label>b =</label>
    <input type="text" name="b"> </br>
    <input type="submit" value="a + b">
</form>

<?php
$a = 0;
$b = 0;
$a = intval($_GET["a"]); //intval() converte string em inteiro.
$b = intval($_GET["b"]);

$soma = $a + $b;

if ($soma > 20) {
    $resultado = $soma + 8;
    echo ("Soma = $soma, é maior que 20. </br>");
    echo (" $soma + 8 = $resultado");
} else { //soma menor ou igual 20
    $resultado = $soma - 5;
    echo ("Soma = $soma, é menor ou igual a 20. </br>");
    echo (" $soma - 5 = $resultado");
}

?>