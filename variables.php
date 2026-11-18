<?php
$producto = "cuaderno";
$precio = 1500;
$cantidad = 3;

$total = $precio * $cantidad;

echo "Compraste ". $cantidad."   ". $producto ." por un total de " .'$'. $total;

echo "<br>";
var_dump($producto);
echo "<br>";
var_dump($total);

?>
