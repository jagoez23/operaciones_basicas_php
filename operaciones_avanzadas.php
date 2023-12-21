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

function suma($a, $b = 0)
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
echo suma(10, 9);


?>