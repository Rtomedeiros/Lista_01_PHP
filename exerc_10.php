<p>
    <b>10)</b> leia 20 números e imprimir a soma dos positivos e
    o total (quantidade) de números negativos:
</p>

<?php
$somaPos = 0;
$totalNeg = 0;
//Array (lista ou vetor) de 20 números.
$num = array(
    40, -20, 40, -20, 40, -20, 40, -20, 40, -20,
    40, -20, 40, -20, 40, -20, 40, -20, 40, 20
);

print("Números lidos: (");
for ($i = 0; $i < 20; $i++) {
    print("$num[$i]");
    if ($i != 19) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(", ");
    }
}
print(")<br><br>");

for ($i = 0; $i < 20; $i++) {
    if ($num[$i] >= 0) { //Positivos
        $somaPos = $somaPos + $num[$i];
    } else {
        //Negativos
        $totalNeg = $totalNeg + 1;
    }
}
print("Somatorio positivos = $somaPos <br>");
print("Total negativos = $totalNeg");
?>