<?php

function es_palindromo($palabra) {
  // Convertimos la palabra a minúsculas para hacer la comparación más fácil
  $palabra = strtolower($palabra);
  
  // Eliminamos los espacios en blanco de la palabra
  $palabra = str_replace(' ', '', $palabra);
  
  // Obtenemos la longitud de la palabra
  $longitud = strlen($palabra);
  
  // Recorremos la mitad de la palabra y comparamos los caracteres simétricos
  for ($i = 0; $i < $longitud / 2; $i++) {
    if ($palabra[$i] != $palabra[$longitud - $i - 1]) {
      return false;
    }
  }
  
  return true;
}

// Ejemplos de uso
echo "En este caso hemos colocado la palabra hola, la cual es no es palindroma, veamos el \nfuncionamiento del script\n";
sleep(2.3);
#echo es_palindromo('reconocer') ? 'Es palíndromo' : 'No es palíndromo'; // Debe imprimir 'Es palíndromo'
echo es_palindromo('hola') ? 'Es palíndromo' : 'No es palíndromo'; // Debe imprimir 'No es palíndromo'
