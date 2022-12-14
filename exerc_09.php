<p>
    <b>9)</b> Leia o número de vezes que se deseja imprimir a
    palavra SOL e imprimir:
</p>

<form method="GET">
    <label>Escreva o nº de vezes para imprimir a palavra SOL:</label>
    <input type="text" name="num"> <br><br>
    <input type="submit" value="Resposta"> <br><br>
</form>

<?php

$num = intval($_GET["num"]);
$i = 1;
while ($i <= $num) {
    print("SOL ");
    $i++;
}
