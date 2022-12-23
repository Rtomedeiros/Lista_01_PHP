<p>
    <b>18)</b> Crie um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal
    principal:
</p>

<?php

$matriz = array(
    array("01", "02", "03", "04", "05"),
    array("06", "07", "08", "09", "10"),
    array("11", "12", "13", "14", "15"),
    array("16", "17", "18", "19", "20"),
    array("21", "22", "23", "24", "25")
);

//print_r($matriz);

//Visualizar a Diagonal Principal, quando o índice da linha e coluna são iguais.
//Ex.: (0,0), (1,1), (2,2), ...
$sizeMatriz = sizeof($matriz);
//print($sizeMatriz);
print("<h3>Diagonal Principal da Matriz 5x5:</h3>");
for ($lin = 0; $lin < $sizeMatriz; $lin++) {
    print("<font size=5><b>|</b></font>");
    for ($col = 0; $col < $sizeMatriz; $col++) {
        if ($lin == $col) {
            print("<font size=5>" . " " . $matriz[$lin][$col] . " " . "</font>");
        } else {
            print("<font size=5> -- </font>");
        }
    }
    print("<font size=5><b>|</b></font><br>");
}

?>