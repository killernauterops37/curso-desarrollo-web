<?php
echo "<hr>";
$filas = [
    ["nombre" => "Sitio web", "prioridad" => "Alta"],
    ["nombre" => "App móvil", "prioridad" => "Media"]
];

$arreglo = ["data"=> []];
while ($fila = array_shift($filas)) {
    $arreglo["data"][] = $fila;
}
echo "<pre>";
echo json_encode($arreglo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo "</pre>"
?>