<?php
    function abrir()
    {
    $host = "db";
    $user = "root";
    $pass = "root";
    $db = "pizzeria";
    $conexion = new mysqli($host, $user, $pass,$db) or die("Error: %s\n". $conexion -> error);
    return $conexion;
    }
    function cerrar($conexion)
    {
    $conexion -> close();
    }
    ?>