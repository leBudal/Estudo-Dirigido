<?php

print "\nDigite a distância em Km: ";
$distancia = (float) fgets(STDIN);

print "Qual velocidade você prentende viajar (Km/h)? ";
$velocidade = (float) fgets(STDIN);

$tempo = ($distancia/$velocidade);

print "\nO tempo médio da viagem será: $tempo horas. \n\n";

?>