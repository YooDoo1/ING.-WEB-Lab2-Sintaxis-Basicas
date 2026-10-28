<?php
// Parte 1: Estructuras basicas.
echo "LABORATORIO 2 - PARTE 1\n";

// Parte 1 - Ejercicio 1: Ordenar dos numeros de menor a mayor.
echo "\n1. Ordenar dos numeros\n";
$a = (float) readline("Primer numero: ");
$b = (float) readline("Segundo numero: ");

// Mostrar primero el numero menor.
if ($a <= $b) {
    echo "Orden: $a, $b\n";
} else {
    echo "Orden: $b, $a\n";
}

// Parte 1 - Ejercicio 2: Determinar si un numero es par o impar.
echo "\n2. Numero par o impar\n";
$n = (int) readline("Ingrese un numero entero: ");

// Si el residuo es cero, el numero es par.
if ($n % 2 == 0) {
    echo "$n es par.\n";
} else {
    echo "$n es impar.\n";
}

// Parte 1 - Ejercicio 3: Convertir millas marinas a metros.
echo "\n3. Millas marinas a metros\n";
$millas = (float) readline("Distancia en millas marinas: ");

// Una milla marina equivale a 1852 metros.
$metros = $millas * 1852;
echo "$millas millas marinas equivalen a $metros metros.\n";

// Parte 1 - Ejercicio 4: Operaciones con dos numeros enteros.
echo "\n4. Operaciones aritmeticas\n";
$a = (int) readline("Primer numero entero: ");
$b = (int) readline("Segundo numero entero: ");

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicacion: " . ($a * $b) . "\n";

// Evitar la division y el modulo entre cero.
if ($b != 0) {
    echo "Division: " . ($a / $b) . "\n";
    echo "Modulo: " . ($a % $b) . "\n";
} else {
    echo "No se puede dividir ni calcular el modulo entre cero.\n";
}

// Parte 1 - Ejercicio 5: Mayor y menor de tres valores distintos.
echo "\n5. Mayor y menor de tres valores\n";
$A = (float) readline("Valor de A: ");
$B = (float) readline("Valor de B: ");
$C = (float) readline("Valor de C: ");

// Los tres valores deben ser distintos.
if ($A == $B || $A == $C || $B == $C) {
    echo "Alerta: hay valores iguales.\n";
} else {
    $mayor = $A;
    $menor = $A;

    if ($B > $mayor) {
        $mayor = $B;
    }
    if ($C > $mayor) {
        $mayor = $C;
    }
    if ($B < $menor) {
        $menor = $B;
    }
    if ($C < $menor) {
        $menor = $C;
    }

    echo "Mayor: $mayor\n";
    echo "Menor: $menor\n";
}

// Parte 1 - Ejercicio 6: Mayor y menor de cuatro numeros distintos.
echo "\n6. Mayor y menor de cuatro numeros\n";
$numeros = array();
for ($i = 0; $i < 4; $i++) {
    $numeros[$i] = (float) readline("Numero " . ($i + 1) . ": ");
}

// Comparar cada numero con los siguientes.
$repetido = false;
for ($i = 0; $i < 3; $i++) {
    for ($j = $i + 1; $j < 4; $j++) {
        if ($numeros[$i] == $numeros[$j]) {
            $repetido = true;
        }
    }
}

if ($repetido) {
    echo "Alerta: los cuatro numeros deben ser diferentes.\n";
} else {
    $mayor = $numeros[0];
    $menor = $numeros[0];
    for ($i = 1; $i < 4; $i++) {
        if ($numeros[$i] > $mayor) {
            $mayor = $numeros[$i];
        }
        if ($numeros[$i] < $menor) {
            $menor = $numeros[$i];
        }
    }
    echo "Mayor: $mayor\n";
    echo "Menor: $menor\n";
}

// Parte 1 - Ejercicio 7: Areas y volumen de un cilindro.
echo "\n7. Calculos del cilindro\n";
$radio = (float) readline("Radio del cilindro: ");
$altura = (float) readline("Altura del cilindro: ");

if ($radio <= 0 || $altura <= 0) {
    echo "El radio y la altura deben ser mayores que cero.\n";
} else {
    // El area total incluye las dos bases.
    $pi = 3.1416;
    $areaLateral = 2 * $pi * $radio * $altura;
    $areaTotal = $areaLateral + 2 * $pi * $radio * $radio;
    $volumen = $pi * $radio * $radio * $altura;

    echo "Area lateral: $areaLateral\n";
    echo "Area total: $areaTotal\n";
    echo "Volumen: $volumen\n";
}

// Parte 2: Ejercicios con menu.
echo "\nLABORATORIO 2 - PARTE 2\n";
// Parte 2 - Ejercicio 1: Sumar los numeros del 1 al 10.
function sumarDiez() {
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma = $suma + $i;
    }
    echo "Suma del 1 al 10: $suma\n";
}

// Parte 2 - Ejercicio 2: Contar impares del 1 al 300 y calcular sumas.
function contarImpares() {
    $cantidad = 0;
    $suma = 0;
    $sumaImpares = 0;
    for ($i = 1; $i <= 300; $i++) {
        $suma = $suma + $i;
        if ($i % 2 != 0) {
            $cantidad++;
            $sumaImpares = $sumaImpares + $i;
        }
    }
    echo "Cantidad de impares: $cantidad\n";
    echo "Suma del 1 al 300: $suma\n";
    echo "Suma de los impares: $sumaImpares\n";
}

// Parte 2 - Ejercicio 3: Promedio de cinco notas, con N para repetir.
function promedioCinco() {
    // N permite repetir el calculo sin salir del menu.
    $N = (int) readline("N (1 = calcular, 0 = volver): ");
    while ($N != 0) {
        $suma = 0;
        for ($i = 1; $i <= 5; $i++) {
            $nota = (float) readline("Nota $i: ");
            $suma = $suma + $nota;
        }
        $promedio = $suma / 5;
        echo "Promedio de las 5 notas: $promedio\n";
        $N = (int) readline("N (1 = otro promedio, 0 = volver): ");
    }
}

// Parte 2 - Ejercicio 4: Media de las notas de diez asignaturas.
function mediaDiez() {
    $notas = array();
    $suma = 0;
    for ($i = 0; $i < 10; $i++) {
        $notas[$i] = (float) readline("Nota " . ($i + 1) . ": ");
    }
    // Recorrer el vector para sumar las calificaciones.
    for ($i = 0; $i < 10; $i++) {
        $suma = $suma + $notas[$i];
    }
    $media = $suma / 10;
    echo "Media de las 10 asignaturas: $media\n";
}

// Parte 2 - Ejercicio 5: Ordenar un vector de cinco enteros.
function mostrarVector($vector) {
    for ($i = 0; $i < 5; $i++) {
        echo $vector[$i] . " ";
    }
    echo "\n";
}

function ordenarVector() {
    $original = array();
    for ($i = 0; $i < 5; $i++) {
        $original[$i] = (int) readline("Entero " . ($i + 1) . ": ");
    }

    $orden = "";
    while ($orden != "v") {
        $orden = readline("a = ascendente, d = descendente, o = original, v = volver: ");
        if ($orden == "a" || $orden == "d") {
            // Ordenar una copia para conservar el vector original.
            $vector = $original;
            for ($i = 0; $i < 4; $i++) {
                for ($j = $i + 1; $j < 5; $j++) {
                    if (($orden == "a" && $vector[$i] > $vector[$j]) ||
                        ($orden == "d" && $vector[$i] < $vector[$j])) {
                        $aux = $vector[$i];
                        $vector[$i] = $vector[$j];
                        $vector[$j] = $aux;
                    }
                }
            }
            echo "Vector ordenado ($orden): ";
            mostrarVector($vector);
        } elseif ($orden == "o") {
            echo "Vector original: ";
            mostrarVector($original);
        } elseif ($orden != "v") {
            echo "Opcion incorrecta.\n";
        }
    }
}

// Menu de la Parte 2.
// Repetir el menu hasta que el usuario escriba X.
$opcion = "";
while ($opcion != "X" && $opcion != "x") {
    echo "\nMENU PRINCIPAL\n";
    echo "1. Sumar del 1 al 10\n";
    echo "2. Impares del 1 al 300\n";
    echo "3. Promedio de 5 notas\n";
    echo "4. Media de 10 asignaturas\n";
    echo "5. Ordenar un vector\n";
    echo "X. Salir\n";
    $opcion = readline("Elija una opcion: ");

    switch ($opcion) {
        case "1":
            sumarDiez();
            break;
        case "2":
            contarImpares();
            break;
        case "3":
            promedioCinco();
            break;
        case "4":
            mediaDiez();
            break;
        case "5":
            ordenarVector();
            break;
        case "X":
        case "x":
            echo "Fin del programa.\n";
            break;
        default:
            echo "Opcion incorrecta.\n";
    }
}
