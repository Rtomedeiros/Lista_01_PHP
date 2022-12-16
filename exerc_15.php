<p>
    <b>15)</b> Armazene 15 números inteiros em um vetor
    e imprimir uma mensagem contendo o número e uma das mensagens:
    par ou ímpar.
</p>

<?php
$num = array(
    10, 18, 40, 13, 7,
    20, 48, 15, 1, 20000,
    3, 302, 1001, 90, 87
);

$sizeArrayNum = sizeof($num);

//Visualizar o Array com os números.
print("Números lidos: (");
for ($i = 0; $i < $sizeArrayNum; $i++) {
    print("$num[$i]");

    if (($num[$i] % 2) == 0) { //Se o resto de num[i] for 0, é par.
        print("-PAR");
    } else { //Caso contrário, é impar.
        print("-ÍMPAR");
    }

    if ($i != ($sizeArrayNum - 1)) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(" , ");
    }
}
print(")<br><br>");

?>