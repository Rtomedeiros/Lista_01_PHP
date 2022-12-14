<p>
    <b>8)</b> Leia um número e imprima todos os números de 1
    até ele e o seu produto:<br>
    (Estou considerando a multiplicação entre os numeros com o produto):
</p>

<form method="GET">
    <label>Escreva um nº inteiro:</label>
    <input type="text" name="num"> <br><br>
    <input type="submit" value="Resposta"> <br><br>
</form>

<?php

$num = intval($_GET["num"]);
$produto = 1;
for ($i = 1; $i <= $num; $i++) {
    print("<h2>$i</h2><br>");

    //A cada loop acrescentar a multiplicação do proximo valor e 
    //obtendo o produto da mesma.
    $produto = $produto * $i;
}
print("__________________________________<br><br>");
print("<h2>Produto total = $produto</h2>");

?>