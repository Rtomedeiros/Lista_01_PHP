<?php
$nome = $_POST["nome"];
$end = $_POST["endereco"];
$tel = $_POST["telefone"];
$cep = $_POST["cep"];
$sexo = $_POST["sexo"];
$prof = $_POST["prof"];

print("<b>Nome:</b> " . $nome . "<br>");
print("<b>Endereço:</b> " . $end . "<br>");
print("<b>Telefone:</b> " . $tel . "<br>");
print("<b>CEP:</b> " . $cep . "<br>");
print("<b>Sexo:</b> " . $sexo . "<br>");
print("<b>Profissão:</b> " . $prof . "<br>");
