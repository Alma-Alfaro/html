<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CARRUSEL DE IMAGENES</title>
</head>

<body>
    <div class="contenedor">

        <div id="slider" class="apartadoImg">
            <button id="prev" onclick="previo();" class="botonIzquierdo"> < </button>

        <div id="imagen" class = "imagenEstilo">
            <img src="Imagenes/imagenUno.jpg" onmouseover="apagar()"></img>
        </div>
        
            <button id="next" onclick="siguiente();" class="botonDerecho"> > </button>
        </div>

   </div>
    <script src="Script/script.js"></script>
</body>
</html>