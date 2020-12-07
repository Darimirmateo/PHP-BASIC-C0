<?php




$var1 = 3;
$var2 = 6;

if($var1 < 10 && $var2 > 5) {
    echo "<p>het getal zit tussen de 10 en de 5!</p>";
} else {
    echo "<p>het getal is groter dan 10 of kleiner dan 5!</p>";
}

if($var1 < 10 || $var2 > 5) {
    echo "<p>het getal zit tussen de 10 en de 5!</P>";
} else {
    echo "<p>het getal is groter dan 10 of kleiner dan 5!</P>";
}


if($var1 < 10 xor $var2 > 5) {
    echo "<p>het getal zit tussen de 10 en de 5!</P>";
} else {
    echo "<p>het getal is groter dan 10 of kleiner dan 5!</p>";
}







?>