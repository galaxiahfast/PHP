


<?php
/*
 * =====================================================================================
 * TEMA: Tipos de datos en PHP
 * =====================================================================================
 * FECHA: 15 de junio de 2026
 *
 * DESCRIPCIÓN:
 * PHP maneja diferentes tipos de datos para almacenar y procesar información.
 * Entre los más utilizados se encuentran los booleanos, enteros, flotantes y
 * cadenas de texto. La función var_dump() permite visualizar el valor y el
 * tipo de dato de una variable o expresión.
 *
 * TIPOS DE DATOS:
 * 1. Booleanos (bool) : TRUE, FALSE
 * 2. Enteros (int)    : 10, -20, 0
 * 3. Flotantes (float): 7.90, -12.75, 3.1416
 * 4. Cadenas (string) : "Hola Mundo", 'Hola Mundo'
 *
 * REFERENCIA:
 * Curso   : Curso de PHP desde cero - 05 ¿Cuáles son los tipos de datos en PHP?
 * Autor   : Carlos Alfaro Aguilar Poot
 * Apuntes : @galaxiahfast
 * URL     : https://youtu.be/Tq3zLl00s3M?si=BSata2fA66nR0mb0
 * =====================================================================================
 */

    // Valores booleanos
    echo TRUE;
    echo FALSE;

    // Valores enteros
    echo 10;
    echo -10;

    // Visualizar tipo y valor de un entero
    var_dump(-10);

    // Visualizar tipo y valor de booleanos
    var_dump(TRUE);
    var_dump(FALSE);

    // Visualizar tipo y valor de números flotantes
    var_dump(7.5);
    var_dump(-7.5);

    // Visualizar tipo y valor de cadenas de texto
    var_dump("Hola Mundo");
    var_dump('Hola Mundo');
?>