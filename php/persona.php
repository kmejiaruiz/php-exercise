<?php

$persona = array(
    "nombre" => "Allan",
    "edad" => "19",
    "ciudad" => "Salt Lake City, Utah",
    "contacto" => "1(786)123-12345"
);

echo "Se ha almacenado a una persona en un array, mostrando datos. \nFavor espere un momento...\n";
sleep(3);

echo " Nombre: " . $persona["nombre"] . "\n Edad: " . $persona["edad"] . "\n Ciudad: " . $persona["contacto"] . "\n";
 echo "Exito al mostrar."
?>