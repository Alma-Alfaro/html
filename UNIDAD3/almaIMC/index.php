<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosIMC.css">
    <title>Calculo de IMC</title>
</head>
<body>
    <header class="titulo_Principal">
        <h1>CALCULADORA DE IMC</h1>
    </header>

    <script src="scriptIMC.js"></script>
    
    <main>
        <form action="#" method = "GET">
            <div class="pesoDiseño">
                <label for="datoUno">Peso: </label>
                <input type="number" name="datoUno" step = "0.01"><label> Kg</label>
                <br>
                <br>
                <label for="datoDos">Altura: </label>
                <input type="number" name="datoDos" step = "0.01"><label> mts</label>
                <br>
                <br>
                <button class="boton">Calcular</button>
            </div>
           <!--  <main>
                <div id="resultados" class="result">
                    <h1 id="pesoAlt_result"></h1>
                    <h1 id="categoria_result"></h1>
                </div>
                <br>
            </main> -->
        </form>
    </main>
    
</body>
</html>

<?php
    $peso = $_GET['datoUno'];
    $altura = $_GET['datoDos'];
    $imc = $peso / ($altura * $altura);
    
    if($imc <= 16){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Desnutrición severa";
    }else if($imc >= 16.1 && $imc <= 18.4){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Desnutrición moderada";
    }else if($imc >= 22.1 && $imc <= 22){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Bajo peso";
    }else if($imc >= 22.1 && $imc <= 24.9){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Peso Normal";
    }else if($imc >= 25 && $imc <= 29.9){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Sobrepeso";
    }else if($imc >= 30 && $imc <= 34.9){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Obesidad tipo I";
    }else if($imc >= 35 && $imc <= 39.9){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Obesidad tipo II";
    }else if($imc >= 40){
        echo "Su IMC es: " . $imc;
        echo '<br>';
        echo "Su estado de su peso es:: Obesidad tipo III";
    }
?>