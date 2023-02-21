<?php
$salario;
const aumento = 15;
const aumento2 = 20;
$aumento;
$salario_final;
echo "Ingrese un salario cualquiera.\n";
echo"->\t";fscanf(STDIN, "%d", $salario);

if ($salario < 1000) {
    echo "Debido a que su salario esta por debajo de los 1000 ($salario) nuestra \nempresa le hara un aumento del 20% a su salario.\n";
    echo "\nCalculando, por favor espere... \n";
    sleep(2.4);

    $aumento = $salario * aumento2 / 100;
    $salario_final = $salario + $aumento;
    
    echo "Hemos hecho el aumento, su aumento sera de: $aumento \n
    Por tanto su salario final sera de: $salario_final
    ";
} else if($salario >= 1000 && $salario <= 1500){
    echo "Su salario pasa de los 1000, se le aplicara un aumento del 15% respectivamente. \nSalario actual: $salario\n";

    $aumento = $salario * aumento / 100;

    $salario_final = $salario + $aumento;

    echo "Aumento realizado con exito, se le ha aumentado la siguiente cantidad : $aumento.\n";
    echo "Su salario con su aumento es de: $salario_final.";
} else {
    echo "Usted no es elegible para aplicarle aumentos.";
}