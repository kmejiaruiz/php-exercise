<?php
$n1 = 121;
$n2 = 16;
$n3 = 19;
echo "Observe el valor de las variables declaradas por el creador:\n $n1 \n $n2 \n $n3. \n Comparando, porfavor espere un segundo... \n";

sleep(2);
echo "Cabe resaltar que estas variables han sido comparadas con la variable n1($n1). \n";
sleep(2);


if ($n2 >= $n1) {
    echo "$n2 es mayor o igual que la variable $n1";
} else if ($n3 >= $n1) {
    echo "$n2 es mayor o igual que la variable $n1";
} else {
    echo "La variable n1($n1), es mayor que todas las demas. ";
}
