<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $nom = $_GET['nombre'];
        $apell = $_GET['apellido'];
        $rut = $_GET['rut'];
        $correo = $_GET['correo_electronico'];
        $carreras = $_GET['carreras'];

        if($carreras=="tns_informatica"){
            echo "Has escogido la mejor carrera";
        }else{
            echo "Muy bien. Vas por buen camino";
        }

        
    }
?>