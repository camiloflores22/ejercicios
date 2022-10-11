<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $nom = $_GET['nombre'];
        $apell = $_GET['apellido'];
        $rut = $_GET['rut'];
        $correo = $_GET['correo_electronico'];

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
            echo "Felicidades te registraste con exito.<br><b>Te registraste como:</b> ".$nom. " ".$apell;
        }
    }
?>