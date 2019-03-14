<?php 

print "Digite o valor do salário: R\$";
$salario = (float) fgets(STDIN);

print "Digite a porcentagem do aumento: ";
$porcentagem = (float) fgets (STDIN);


$porcentagem_dec = ($porcentagem/100);
$aumento = ($salario*$porcentagem_dec);
$novo_salario = ($salario+$aumento);

print "\nSeu novo salário é: R\$$novo_salario com aumento de: R\$$aumento \n\n";

?>