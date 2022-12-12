<?php
echo (" 1)leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser
//apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este
//deverá ser apresentado subtraindo-se 5:<br><br>");
?>

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