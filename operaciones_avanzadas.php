<?php

//O functie care primeste un numar si returneaza suma tuturor numerelor in ordine naturala, pana la acel numar inclusiv
//Fie n nr dat, n>0. Functia adunare: 1+2+3+..+n-1+n
// Rezolvare : formula de calcul a sumei unui sir este : S = n(n+1)/2
//ddddfddggg

/*$numar = 10;
function suma($numar)
{
    $suma = $numar * ($numar + 1) / 2;
    return $suma;
}
$suma_mea = suma($numar);
print $suma_mea;*/

/*function suma($numar)
{
    $s = 0;
    for ($j = 0; $j <= $numar; $j++) {
        $s += $j;
        print $s;
        echo "\n";
    }
}
suma(3);*/

/*function suma($a, $b = 0)
{
    $c = $a + $b;
    return $c;
}
function resta($a, $b)
{
    $c = $a - $b;
    return $c;
}
echo resta(5, 10) . '<br>';
echo suma(10, 9);*/

/*$var = 5;//varaible global

function suma ()
{
	$var =12;//variable local
	if ($var == 12) {
		print($var);
	}


}
print(suma());*/

//Ejemplo 1
echo "<h1>";
function suma($x, $y)
{
    $z = $x + $y;
    return $z;
}
$resultado = suma(5,12);
echo "<br>";
print($resultado);
echo "</h1>";

//Ejemplo 2

function multiplicacion ($multiplicacion)
{
    return $multiplicacion + $multiplicacion;// Creamos la funcion en este caso multiplicacion.
}

print("multiplicacion: " . multiplicacion(10));



