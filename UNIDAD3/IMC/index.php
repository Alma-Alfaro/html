<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>IMC</title>
    <meta charset="utf-8">
</head>

<body>

    <form action="#" method="GET">
        
    <div class="diseñoPeso">
        <label>Peso: </label>
        <input type="number" name="peso" id="nombre" step = "0.01">
        <br><br>
        <label>Altura: </label>
        <input type="number" name="altura" id="escuela" step = "0.01">
        <br><br>
        <button class="diseñoBoton">Calcular</button>
    </div>
    
    </form>
</body>

</html>

<?php 
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $calcularImc = $peso / ($altura * $altura);

    
    if ($calcularImc > 30) {
        $grupo = "Obesidad";
    } else if ($calcularImc > 25) {
        $grupo = "Sobrepeso";
    } else if ($calcularImc > 18.5) {
        $grupo = "Normal";
    } else {
        $grupo = "Bajo peso";
    }
    echo "Su IMC: " . $calcularImc . " Usted pertenece al grupo: " . $grupo;

?>