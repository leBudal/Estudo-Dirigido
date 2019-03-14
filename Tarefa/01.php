<?php

    print "\n Quantos metros você quer converter? R: ";
    $metros = (float) fgets(STDIN);

    $milimetros = $metros*1000;

    print "\n $metros metros em milímetros é: $milimetros mm \n\n";

?>
