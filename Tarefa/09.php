<?php

print "\nQuantos metros quadrados você vai pintar? ";
$metros = (float) fgets(STDIN);

$tinta_usada = ($metros/6);

print "\n\nPreço da lata de 18 litros: R\$80,00\n";
print "Preço do galão de 3,6 litros: R\$25,00\n";

print "\n\nOpção 1: Somente em latas de 18 litros.";
print "\nOpção 2: Somente em galões de 3,6 litros.";
print "\nOpção 3: Misturar latas e galões, de forma que o preço seja o menor. \n\n";
print "Opção: ";
$opcao = (int) fgets(STDIN);

switch($opcao) {

    case 1:
        $lata = ceil($tinta_usada/18);
        $val_lata = $lata*80;

        print "\n\nVocê deverá comprar $lata latas de tinta. Preço total: R\$$val_lata.\n\n";
        break;

    case 2:
        $galao = ceil($tinta_usada/3.6);
        $val_galao = $galao*25;

        print "\n\nVocê deverá comprar $galao galões de tinta. Preço total: R\$$val_galao.\n\n";
        break;

    case 3:
        $lata = ceil($tinta_usada/18);
        $a1 = $lata%18;
        $a2 = ceil($a1/3.6);
        $valor_total = ($lata*80)+($a2*25);
        $desc = $valor_total-($valor_total*0.10);

        print "\n\nVocê deverá comprar $lata latas e $a2 galões de tinta. Preço total com desconto de 10%: R\$$desc.\n\n";
        break;
}

?>