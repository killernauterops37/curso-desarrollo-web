<?php
$proyectos = [
    ["nombre" => "Sitio web",  "encargado" => "Ana",   "prioridad" => "Alta"],
    ["nombre" => "App móvil",  "encargado" => "Luis",  "prioridad" => "Media"],
    ["nombre" => "Intranet",   "encargado" => "Marta", "prioridad" => "Alta"]
];

$proyectos[] = ["nombre" => "Tienda online",   "encargado" => "Pedro", "prioridad" => "Baja"];
echo "Total de Proyectos: " . count($proyectos) . "<br><br>";


foreach ($proyectos as $proyecto) {
    echo $proyecto["nombre"]. " | " . $proyecto["encargado"]. " | " . $proyecto["prioridad"] . "<br>";
}

//filtrar proyectos de prioridad alta
echo "<br>Proyecto de prioridad alta<br>";
$contador = 0 ;


// siempre se ejecuta primero
foreach ($proyectos as $proyecto) {
    if ($proyecto["prioridad"] == "Alta") {
        echo $proyecto["nombre"]. " | " . $proyecto["encargado"]. " | " . $proyecto["prioridad"] . "<br>";
        $contador++;
    } 
}

if ($contador == 0) {
    echo "No se encontraron datos";
}

//Mostar Json
// la |  combina varias opcioens en una sola . es como decir yo quiero esta opción y tambien esta otra .
echo "<pre>";
echo json_encode($proyectos,
JSON_PRETTY_PRINT |         // Ordena json con saltos de linea y sangria  para que sea mas facil leerlo 
JSON_UNESCAPED_UNICODE);   // Sin esta opcion json_encode convierte los toldes y las ñ en codigos raros
echo "</pre>";
?>

