<p>
    <b>13)</b> Chico tem 1,50m e cresce 2 centímetros por ano, enquanto
    Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmo
    que calcule e imprima quantos anos serão necessários para que Juca
    seja maior que Chico.
</p>

<?php

$hChico = 1.5;
$hJuca = 1.1;
$contadorAno = 0;
//Enquanto a altura do Juca for menor, continuar rodando.
while ($hJuca < $hChico) {
    $hChico += 0.02; //Mesma coisa de $hChico = $hChico + 0.02;
    $hJuca += 0.03; //Mesma coisa de $hJuca = $hJuca + 0.03;
    $contadorAno++;
}

print("Anos necessários para que Juca seja maior que Chico = $contadorAno");

?>