<?php

print "\nHá quantos anos você fuma? ";
$anos_fumados = (int) fgets(STDIN);

print "Quantos cigarros você fuma por dia? ";
$cigarros_fumados_dia = (int) fgets(STDIN);


$cigarros_fumados = $cigarros_fumados_dia*365*$anos_fumados;
$min_perdidos = $cigarros_fumados*10;
$hrs_perdidas = $min_perdidos/60;
$dias_perdidos = round($hrs_perdidas/24);

print "\n Você perde em média $dias_perdidos dias da sua vida ao fumar $cigarros_fumados_dia cigarros por dia. \n\n";

?>