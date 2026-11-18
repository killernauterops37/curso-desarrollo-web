<?php
$nota = 5.5;


if ($nota < 1.0 || $nota > 7.0) {
    echo "Nota inválida";
} elseif ($nota >= 6.0) {
    echo "Excelente";
} elseif ($nota >= 4.0) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}

?>