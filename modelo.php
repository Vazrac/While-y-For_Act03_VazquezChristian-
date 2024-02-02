<?php
class Operaciones {
    public function mostrarNumeros($inicio, $fin) {
        while ($inicio <= $fin) {
            echo $inicio . " ";
            $inicio++;
        }
    }
    public function dibujarEscalera($niveles) {
        for ($i = 1; $i <= $niveles; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    public function tablaMultiplicar($numero) {
        echo "<h2>Tabla de multiplicar del num $numero:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    }
}
?>
