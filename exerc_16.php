<p>
    <b>16)</b> Crie um vetor com 20 elementos inteiros.
    Imprimir o maior e o menor, sem ordenar,
    o percentual de números pares e
    média dos elementos do vetor.
</p>

<?php

$num = array(
    100, 18, 400, 13, 70, 20, 48, 15, 1, 200,
    14, 21, 88, 90, 47, 2, 403, 38, 14, 101
);
//Menor é 1, Maior é 403.
//Há 13 pares.

$sizeArrayNum = sizeof($num);

//Visualizar o Array com os números.
print("Números lidos: (");
for ($i = 0; $i < $sizeArrayNum; $i++) {
    print("$num[$i]");
    if ($i != ($sizeArrayNum - 1)) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(", ");
    }
}
print(")<br><br>");

$maior = -1000000;
$menor =  1000000;
$contPar = 0;
$somaElementos = 0;
for ($i = 0; $i < $sizeArrayNum; $i++) {
    //If para encontrar o maior e o menor valor dentro do vetor num.
    if ($num[$i] > $maior) {
        $maior = $num[$i];
    } else if ($num[$i] < $menor) {
        $menor = $num[$i];
    }

    //If para contabilizar a quantidade de pares no vetor.
    if (($num[$i] % 2) == 0) { //Se o resto de num[i] for 0, é par.
        $contPar++;
    }

    //Somatório dos elementos para a média do vetor.
    $somaElementos += $num[$i];
}
print("<b>Maior</b> = $maior</h3><br>");
print("<b>Menor</b> = $menor</h3><br><br>");

//Percentual de números pares.
$percentualPares = ($contPar * 100) / $sizeArrayNum;
print("<b>Percentual de nº pares</b> = $percentualPares %<br><br>");

//Média dos elementos do vetor.
$mediaVetor = $somaElementos / $sizeArrayNum;
print("<b>Média dos elementos do vetor</b> = $mediaVetor");

?>