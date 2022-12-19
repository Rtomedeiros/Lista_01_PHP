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

//$vetor01 = array(10, 14, 24, 18, 31, 1, 0, 150, 77, 65);
//$vetor02 = array(0, 18, 400, 31, 9, 65, 8, 10, 1, 200);
echo ("Comuns = (10, 18, 31, 1, 0, 65)<br>");
echo ("Não Comuns = (14, 24, 150, 77, 400, 9, 8, 200)<br><br>");

$indiceVComum = 0; //Variavel para rodar o indice do Vetor elementos COMUNS quando for armazenar os elementos iguais dos dois vetores iniciais.
for ($i = 0; $i < $sizeArrayV01; $i++) {
    //For dentro de outro for para comparar cada elemento de V01 com todos de V02.
    //Até fazer a comparação entre todos os elementos dos dois vetores.
    //ENCONTRANDO OS ELEMENTOS COMUNS PRIMEIRO.
    for ($j = 0; $j < $sizeArrayV02; $j++) {
        if ($vetor01[$i] == $vetor02[$j]) { //Se for iguais, são comuns.
            $vetorComum[$indiceVComum] = $vetor01[$i]; //Poderia ser usado o $vetor02[$i], pois o elemento é igual.
            $indiceVComum++;
        }
    }
}

$sizeArrayVComum = sizeof($vetorComum);

//ENCONTRANDO OS ELEMENTOS INCOMUNS.
$indiceVIncomum = 0; //Variavel para rodar o indice do Vetor elementos INCOMUNS quando for armazenar os elementos distintos dos dois vetores iniciais.
//Elementos Incomuns no Vetor01.
for ($i = 0; $i < $sizeArrayV01; $i++) {
}


$sizeArrayVIncomum = sizeof($vetorIncomum);
//print("$sizeArrayVResult<br><br>");

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