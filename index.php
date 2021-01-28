<?php

/* LO QUE HACE UN BUCLE ES EJECUTAR UN BLOQUE DE INSTRUCCIONES TANTAS VECES COMO SEA NECESARIO 

                                                #Bucle while

# Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como sea necesario, en base a una condición que el bucle lleva.

while(condicion) {      // Mientras que la condicion se cumpla , entra al bloque de instrucciones y ejecuta lo que contiene dentro de las llaves. Cuando la condicion no se cumpla, sale del bucle 
    bloques de instrucciones
    otra instruccion
}
*/


/*$numero = 0;

while ($numero <= 100) {
    echo "<p>$numero</p>";

    if ($numero != 100) {
        echo ", ";        // Agrega la coma
    }
    $numero++;
}

echo "<hr/>";*/


// Ejemplo while 


if (isset($_GET['numero'])) {     // Isset muestra si la variable existe
    $numero = (int)$_GET['numero']; // Casteo de datos , castear una variable significa cambiarle el tipo. (Si queremos)
} else {
    $numero = 5;
}

//Creando tablas de multiplicar

echo "<h1> Tabla de multiplicar del número $numero </h1>";

$contador = 5;
while ($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
};