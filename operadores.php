<?php 

/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División
%  resto: 10 % & = 4

-- */

// $numero = 10;
// $numero2 = 6;

// $resultado = $numero + $numero2;
// echo $resultado;

/* Operadores de Asignación:

=
+=
-=
*=
/=

-- */

// $numero = 10;
// $numero2 = 5;

// // $numero = $numero + 7;
// $numero += 7;
// echo $numero;

/* Operadores de Comparación:

== : solo comprueba que es del mismo valor. 
Ejemplo: ('10' === 10) = true
=== : Comprobar que sea tanto en valor como en tipo de dato
Ejemplo de ===: ('10' === 10) = false
!=, <>
!==
>
<
>=
<=

-- */
// $numero = '10'; // String
// $variable = 'true';

// if ($variable < true) {
// 	echo "string";
// }

/* Operadores Lógicos:

and, &&
or, ||
xor
!

-- */
// $numero = 10;

// if ($numero >= 10 && $numero < 20) {
// 	echo "Ejecuta";
// }

/* Operadores de Incremento / Decremento:

echo ++$x : primero incrementa y luego muestra el valor
echo $x++: primero muestra el valor y despues incrementa
--$x
$x--

-- */

$numero = 10;
// $numero = $numero + 1;
// $numero += 1;

// echo $numero--;
// echo "<br />";
// echo $numero;

/* Operadores de Cadenas:
.
.=

-- */

$texto = 'Cadena de Texto';
$texto .= ' Una segunda Cadena de Texto';

echo $texto;

?>