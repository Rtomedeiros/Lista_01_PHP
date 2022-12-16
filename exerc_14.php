<p>
    <b>14)</b> Na usina de Angra dos Reis, os técnicos analisam a perda
    de massa de um material radioativo. Sabendo-se que este perde 25%
    de sua massa a cada 30 segundos, criar um algoritmo que imprima
    o tempo necessário para que a massa desse material
    seja menor que 0.10 (gramas).
</p>

<form method="GET">
    <label>Massa Inicial do Material Raioativo (em gramas):</label>
    <input type="text" name="massaInicial"><br><br>
    <input type="submit" value="Resposta"> <br><br>
</form>

<?php

$massaInicial = floatval($_GET["massaInicial"]);  //função floatval() converte string em float.

$massa = $massaInicial;
$tempo = 0; //em minutos, a cada loop sobe 0.5 (meio minuto que representa 30 segundos)
while ($massa > 0.1) { //Enquanto massa for maior, continuar rodando.
    $massa = $massa - ($massa * 0.25);
    $tempo += 0.5;
}

print("Tempo para que a massa do material seja menor (<) que 0.10 gramas: $tempo minutos");

?>