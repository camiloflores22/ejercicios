<?php
if( isset($_GET["submit"]) && !empty($_GET["submit"])){
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
   

    $pon1 = $_GET["ponderacion1"];
    $pon2 = $_GET["ponderacion2"];


    $nota_final = $n1*($pon1/100) + $n2*($pon2/100);
   


    echo "el promedio es: " .$nota_final. "<br />";

    if ($nota_final > 4){
        echo "Aprobo 😀";
    }else{
        echo "Reprobo 😞";
    }
} 

    ?>