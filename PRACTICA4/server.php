<?php
    require_once "lib/nusoap.php";
    function getCars($datos){
        if($datos == "Cars"){
            return join(",", array(
                "Mazda MX-5",
                " Mercedes-AMG C 63 S",
                " BMW M2 Competition",
                " Ford Mustang"));
        }else{
            return "No hay Autos deportivos para mostrar";
        }
    }
    $server = new soap_server();
    $server->register("getCars");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server -> service($HTTP_RAW_POST_DATA);
?>