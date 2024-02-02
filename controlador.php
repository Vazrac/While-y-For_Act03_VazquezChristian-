<?php
require_once 'modelo.php';
require_once 'vista.php';
class Controlador {
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista) 
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }
    public function realizarOperaciones($numero1, $numero2, $niveles, $multiplicar) {
        $this->vista->mostrarResultado("Números entre $numero1 y $numero2: ");
        $this->modelo->mostrarNumeros($numero1, $numero2);
        $this->vista->mostrarResultado("<br>Escalera de $niveles niveles: ");
        $this->modelo->dibujarEscalera($niveles);
        $this->modelo->tablaMultiplicar($multiplicar);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero1 = isset($_POST['numero1']) ? (int)$_POST['numero1'] : 0;
    $numero2 = isset($_POST['numero2']) ? (int)$_POST['numero2'] : 0;
    $niveles = isset($_POST['niveles']) ? (int)$_POST['niveles'] : 0;
    $multiplicar = isset($_POST['multiplicar']) ? (int)$_POST['multiplicar'] : 0;
    $modelo = new Operaciones();
    $vista = new vista();
    $controlador = new Controlador($modelo, $vista);
    $controlador->realizarOperaciones($numero1, $numero2, $niveles, $multiplicar);
} else {
    $vista = new vista();
    $vista->mostrarFormulario();
}
?>
