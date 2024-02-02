<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE Y FOR</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section class="titulo">
    <h1 class="titulo"> Bienvenido</h1>
    <h5 > Coloca la información requerida</h5>
    </section>
    
</body>
</html>


<?php
class Vista {
    public function mostrarFormulario() {
        echo "<form method='post' action=''>";
        echo "<label for='numero1'>Ingrese el primer número:</label><br>";
        echo "<input type='number' id='numero1' name='numero1' required><br>";
        echo "<label for='numero2'>Ingrese el segundo número mayor que el anterior:</label><br>";
        echo "<input type='number' id='numero2' name='numero2' required><br>";
        echo "<label for='niveles'>Niveles que quieres que tenga la esclaera de '*':</label><br>";
        echo "<input type='number' id='niveles' name='niveles' required><br>";
        echo "<label for='multiplicar'>De que num deseas conocer la tabla de multiplicar:</label><br>";
        echo "<input type='number' id='multiplicar' name='multiplicar' required><br> <br>";
        echo "<button type='submit'>Calcular</button>";
        echo "</form>";
    }

    public function mostrarResultado($resultado) {
        echo "<div>$resultado</div>";
    }
}
?>
