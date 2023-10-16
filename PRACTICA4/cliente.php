<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/PRACTICA4/server.php");
    $error = $cliente->getError();
    if($error){
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
    $result = $cliente -> call("getCars", array("datos" => "Cars"));
    if($cliente->fault){
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }else{
        echo "<h2>AUTOS DEPORTIVOS: </h2><pre>";
        print_r($result);
        echo "</pre>";
    }
?>