<?php
    header('Access-Control-Allow-Origin: http://localhost');
    $user = $_POST['name'];
    echo ("Saludos desde el contenedor de PHP: $user");
?>