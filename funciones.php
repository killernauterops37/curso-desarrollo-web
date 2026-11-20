<?php
function evaluarNota(float $nota): string {
    if ($nota < 1.0 || $nota > 7.0) {
        return "Nota Inválida";
    } elseif ($nota >= 6.0) {
        return "Excelente ";
    } elseif ($nota >= 4.0) {
        return "Aprobado";
    } else {
        return "Reprobado";
    }
}
echo "<hr>";
echo "7.0: ". evaluarNota(7.0) . "<br>";
echo "5.5: ". evaluarNota(5.5) . "<br>";
echo "3.9: ". evaluarNota(3.9) . "<br>";
echo "8.0: ". evaluarNota(8.0) . "<br>";
echo "<hr>";

?>