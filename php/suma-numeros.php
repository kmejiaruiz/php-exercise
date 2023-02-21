<?php
echo "Ingresa dos numeros para sumarlos, recuerde separarlos por una coma. \n";

fscanf(STDIN, "%d,%d", $n1,$n2);
 $n3 = $n1+$n2;
echo "El resultado de la suma es $n3";

