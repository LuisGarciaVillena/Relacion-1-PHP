<?php
$edad = readline("Introduce tu edad: ");

if ($edad >= 18) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}


$numero = readline("Introduce un número: ");

if ($numero > 0) {
    echo "El número es positivo.\n";
} elseif ($numero < 0) {
    echo "El número es negativo.\n";
} else {
    echo "El número es 0.\n";
}


$numero = readline("Introduce un número: ");

if ($numero % 2 == 0) {
    echo "El número es par.\n";
} else {
    echo "El número es impar.\n";
}


$numero1 = readline("Introduce el primer numero: ");

$numero2 = readline("Introduce el segundo numero: ");

if ($numero1 == $numero2) {
    echo "Los números son iguales.\n";
} else {
    echo "Los números son diferentes.\n";
}


?>