<?php

    DEFINE('HOST', 'localhost');
    DEFINE('USERNAME', 'root');
    DEFINE('PASSWORD', '');
    DEFINE('DATABASE', 'bahiabranch');
    
    $DSN = 'mysql:root='.HOST.';dbname='.DATABASE;

    try{
        $conexion = new PDO($DSN, USERNAME, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $e){
        die($e->getMessage());
    }
    //for the momment Agatha dolly