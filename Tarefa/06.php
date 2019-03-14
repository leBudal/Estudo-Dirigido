<?php

print "\nDigite a temperatura em Celsius: ";
$temp_C = (float) fgets(STDIN);

$temp_faren = (9*$temp_C/5 + 32);

print "\n$temp_C °C em Farenheit é: $temp_faren °F \n\n";

?>