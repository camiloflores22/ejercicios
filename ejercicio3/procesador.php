<?php
if( isset($_GET["submit"]) && !empty($_GET["submit"])){
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3 = $_GET["nota3"];
    $n4 = $_GET["nota4"];

    $pon1 = $_GET["ponderacion1"];
    $pon2 = $_GET["ponderacion2"];
    $pon3 = $_GET["ponderacion3"];
    $pon4 = $_GET["ponderacion4"];

    $nota_final = $n1*($pon1/100) + $n2*($pon2/100) + $n3*($pon3/100) + $n4*($pon4/100);
   


    echo "el promedio es: " .$nota_final. "<br />";

    if ($nota_final > 4){
        echo "Aprobo";
    }else{
        echo "Reprobo";
    }
}

    ?>