<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $nom = $_GET['nombre'];
        $apell = $_GET['apellido'];
        $rut = $_GET['rut'];
        $correo = $_GET['correo_electronico'];
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $n3 = $_GET["nota3"];
        $n4 = $_GET["nota4"];

        $nota_final = ($n1+$n2+$n3+$n4)/4;

        if(empty($nom)){
            echo "Agrega tu nombre<br>";
        }else if(strlen($nom)>15){
            echo "Nombre probablemente INVALIDO<br>";
        }else if (is_numeric($nom)){
            echo "ERROR se detecto un numero en tu nombre<br>";
        }else if(empty($apell)){
            echo "Agrega tu apellido<br>";
        }else if(strlen($apell)>20){
            echo "Apellido probablemente INVALIDO<br>";
        }else if(is_numeric($apell)){
            echo "ERROR se detecto un numero en tu Apellido<br>";
        }else if(empty($rut)){
            echo "Agrega tu rut<br>";
        }else if(strlen($rut)>13){
            echo "ERROR RUT INVALIDO<br>";
        }else if(!is_numeric($rut)){
            echo "ERROR se detecto una letra en tu rut<br>";
        }else if(empty($correo)){
            echo "Agrega tu correo electronico";
        }else{
            echo "Felicidades te registraste con exito.<br><b>Te registraste como:</b> ".$nom. " ".$apell. "<br> Tu promedio fue:".$nota_final;
        
            if ($nota_final > 4){
                echo "Aprobo";
            }else{
                echo "Reprobo";
            
        }
        }
    }
?>