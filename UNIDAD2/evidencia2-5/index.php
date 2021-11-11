<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Aritmetica</title>
    <script src="./scripts/script.js" defer></script>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="centered_div">
        <br>
        <div class="res_div">
            <h3 id="res">res</h3>
        </div>
        <div class="onoff_div" style="display: flex;">
            <form>
                <label for="on">ON</label>
                <input type="radio" checked name="onoff" id="on">
                <label for="off">OFF</label>
                <input type="radio" name="onoff" id="off">
            </form>
            <button onclick="onoff();">ok</button>
        </div>
        <div id="calc" class="calculadora">
            <button onclick="agregar('7');">7</button>
            <button onclick="agregar('8');">8</button>
            <button onclick="agregar('9');">9</button>
            <button onclick="agregar('+');">+</button>
            <button onclick="agregar('4');">4</button>
            <button onclick="agregar('5');">5</button>
            <button onclick="agregar('6');">6</button>
            <button onclick="agregar('-');">-</button>
            <button onclick="agregar('1');">1</button>
            <button onclick="agregar('2');">2</button>
            <button onclick="agregar('3');">3</button>
            <button onclick="agregar('*');">X</button>
            <button onclick="borrar();">c</button>
            <button onclick="agregar('0');">0</button>
            <button onclick="evaluar();">=</button>
            <button onclick="agregar('/');">/</button>
        </div>
        <br>
    </div>
</body>

</html>