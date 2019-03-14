<?php

print "\nQuantos Km você fez? ";
$km = (float) fgets(STDIN);

print "Quantos dias você alugou o carro? ";
$dias = (float) fgets(STDIN);

$preco_km = ($km*0.15);
$preco_dias = ($dias*60);
$total = ($preco_dias+$preco_km);

print "\nTotal do aluguel: R\$$total \n\n"

?>