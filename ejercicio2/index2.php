<?php
$nota1 = 1;
$nota2 = 1;
$nota3 = 1;
$nota4 = 1;
$nota5 = 2;
$nota6 = 2;
$nota7 = 2;
$nota8 = 2;

$promedio= ($nota1+$nota2+$nota3+$nota4+$nota5+$nota6+$nota7+$nota8)/3;

echo "el promedio es: " .$promedio. "<br />";

if ($promedio > 4){
    echo "Aprobo";
   }else{
    echo "Reprobo";
   }


?>