<p>
    <b>17)</b> Crie 2 vetores com 10 números inteiros cada.
    Gerar e imprimir um vetor dos números não comuns aos vetores.<br>
    (Não comuns entendo que é os números distintos que tem em cada vetor,
    ou seja, agrupar os diferentes em um novo vetor).
</p>

<?php

$vetor01 = array(10, 14, 24, 18, 31, 1, 0, 150, 77, 65);
$vetor02 = array(0, 18, 400, 31, 9, 65, 8, 10, 1, 200);

$sizeArrayV01 = sizeof($vetor01);
$sizeArrayV02 = sizeof($vetor02);

//Visualizar o Vetor 01.
print("Vetor 01: (");
for ($i = 0; $i < $sizeArrayV01; $i++) {
    print("$vetor01[$i]");
    if ($i != ($sizeArrayV01 - 1)) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(", ");
    }
}
print(")<br><br>");

//Visualizar o Vetor 02.
print("Vetor 02: (");
for ($i = 0; $i < $sizeArrayV02; $i++) {
    print("$vetor02[$i]");
    if ($i != ($sizeArrayV02 - 1)) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(", ");
    }
}
print(")<br><br>");

//echo ("Comuns = (10, 18, 31, 1, 0, 65)<br>");
//echo ("Não Comuns = (14, 24, 150, 77, 400, 9, 8, 200)<br><br>");

//ENCONTRANDO OS ELEMENTOS INCOMUNS.
$vetorIncomum01 = array_diff($vetor01, $vetor02);
$vetorIncomum02 = array_diff($vetor02, $vetor01);
$vetorIncomum = array_merge($vetorIncomum01, $vetorIncomum02);

//print_r($vetorIncomum);

$sizeArrayVIncomum = sizeof($vetorIncomum);

print("<h3>Vetor dos números não comuns aos vetores</h3>");
//Visualizar o Vetor de elementos INCOMUNS.
print("<b>Vetor Resultado</b>: (");
for ($i = 0; $i < $sizeArrayVIncomum; $i++) {
    print("$vetorIncomum[$i]");
    if ($i != ($sizeArrayVIncomum - 1)) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(", ");
    }
}
print(")<br><br>");

?>