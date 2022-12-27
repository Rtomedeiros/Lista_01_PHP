<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$dataNasc = $_POST["dataNasc"];
$cartao = $_POST["cartao"];

print("<b>Nome:</b> " . $nome . "<br>");
print("<b>E-mail:</b> " . $email . "<br>");
print("<b>Data de Nascimento:</b> " . $dataNasc . "<br>");
print("<b>Cartão de Crédito:</b> " . $cartao . "<br>");
