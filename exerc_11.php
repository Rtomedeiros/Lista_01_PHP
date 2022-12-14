<p>
    <b>11)</b> Leia uma palavra e imprima conforme o exemplo: <br>
    Palavra: sonho <br>
    SONHO <br>
    SONHO SONHO <br>
    SONHO SONHO SONHO <br>
    SONHO SONHO SONHO SONHO <br>
</p>

<form method="GET">
    <label>Palavra:</label>
    <input type="text" name="palavra"> <br><br>
    <input type="submit" value="Resposta"> <br><br>
</form>

<?php
$palavra = strtoupper($_GET["palavra"]);  //função para deixar uma string toda em letra maiúscula.
$loop = 1;
while ($loop <= 4) { //while para rodar as 4 camadas da estrutura de "pirâmide".
    for ($i = 0; $i < $loop; $i++) { // for interno para escrever a quantidade de palavras em cada camada da pirâmide (1-2-3-4)
        print("$palavra ");
    }
    print("<br>"); //Quebrar a linha a cada final da camada da pirâmide (1-2-3-4).
    $loop++;
}

//if usado em lógica inicial com um while rodando em loop 10 vezes.
//while ($loop <= 10) {
//print("$palavra ");
//if (($loop == 1) || ($loop == (1 + 2)) || ($loop == (1 + 2 + 3)) || ($loop == (1 + 2 + 3 + 4))) {
//    print("<br>");
//}
//$loop++;
//}

?>