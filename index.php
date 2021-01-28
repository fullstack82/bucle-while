<?php

/* LO QUE HACE UN BUCLE ES EJECUTAR UN BLOQUE DE INSTRUCCIONES TANTAS VECES COMO SEA NECESARIO 

                                                #Bucle while

# Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como sea necesario, en base a una condición que el bucle lleva.

while(condicion) {      // Mientras que la condicion se cumpla , entra al bloque de instrucciones y ejecuta lo que contiene dentro de las llaves. Cuando la condicion no se cumpla, sale del bucle 
    bloques de instrucciones
    otra instruccion
}
*/


$numero = 0;

while($numero <= 100){
    echo "<p>$numero</p>";
    $numero++;
}