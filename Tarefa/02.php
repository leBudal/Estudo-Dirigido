<?php

print "Digite uma quantidade de dias: ";
$dias = (int) fgets(STDIN);

print "Digite uma quantidade de horas: ";
$horas = (int) fgets(STDIN);

print "Digite uma quantidade de minutos: ";
$minutos = (int) fgets(STDIN);

print "Digite uma quantidade de segundos: ";
$segundos = (int) fgets(STDIN);

$seg_dias = ($dias*24*60*60); 
$seg_horas = ($horas*60*60); 
$seg_minutos = ($minutos*60);  
$tot_segundos = ($seg_dias+$seg_horas+$seg_minutos+$segundos);

print "\n $dias dias em segundos é: $seg_dias \n";
print "$horas horas em segundos é: $seg_horas \n";
print "$minutos minutos em segundos é: $seg_minutos \n";
print "Total de segundos: $tot_segundos";

?>