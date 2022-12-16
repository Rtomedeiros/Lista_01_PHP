<p>
    <b>12)</b> Leia vários números e informar quantos números entre 100 e 200
    foram digitados. Se o valor 0 for lido encerrar a execução:
    (100 e 200 incluídos no intervalo)
</p>

<?php
$num = array(100, 200, -400, 150, 99, 202, 180, 10, 80, 0);

$sizeArrayNum = sizeof($num);
//print("Tamanho da lista: $tamanhodalista <br><br>");

//Visualizar o Array com os números.
print("Números lidos: (");
for ($i = 0; $i < $sizeArrayNum; $i++) {
    print("$num[$i]");
    if ($i != ($sizeArrayNum - 1)) { //Quando chegar na última posição não imprimir a virgula e espaço.
        print(", ");
    }
}
print(")<br><br>");

$contador = 0;
$i = 0;
//dowhile roda até ter um número 0 dentro Array $num.
do {
    if (($num[$i] >= 100) && ($num[$i] <= 200)) {
        $contador++;
    }
    //print("<br>$num[$i]<br>");
    $i++;
} while ($num[$i] != 0);
print("<h3>Quantidade de números entre 100 e 200 = $contador</h3><br>");

?>