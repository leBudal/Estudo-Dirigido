<?php 

print "Digite o valor do produto: R$";
$val_prod = (float) fgets(STDIN);

print "Digite a porcentagem do desconto: ";
$porcentagem = (float) fgets (STDIN);


$porcentagem_dec = ($porcentagem/100);
$desconto = ($val_prod*$porcentagem_dec);
$valor_desc = ($val_prod-$desconto);

print "\nO produto recebe R\$$desconto de desconto\n";
print "O preço final a pagar é: R\$$valor_desc \n\n";

?>