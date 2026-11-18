<?php

if (empty($_POST['nombre']) || empty($_POST['ciudad'])) {
    echo "Por favor completa todos los campos";
} else {
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    echo "Hola $nombre, saludos a $ciudad";
}

?>
