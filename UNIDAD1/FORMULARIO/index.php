<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="center">

    <h1>ENCUESTA PARA EL PRODUCTO X</h1>
    <hd>Tu correo se registrará cuando envíes este formulario</hd>
    <h2></h2>
    <hd> ¿No es tuya la dirección 1830326@upv.edu.mx? <a href="https://accounts.google.com/AccountChooser?continue=https://docs.google.com/forms/d/e/1FAIpQLSdClwnPHazaVMQkhJLBCrz7Dfq0RXNiYM8aAuIzSg4kXAZnLw/viewform&amp;service=wise" aria-describedby="wSDd7b">Cambiar de cuenta</a><hd></hd>
    <h2></h2>
    <hd>*Obligatorio</hd>
    <h2></h2>
    <form action="2dapag.php">
        <div>
            <label for="Nombre">Nombre</label>
            <h1></h1>
            <input type="text"name="nombre" id="nombre" placeholder="Tu respuesta" required >
        </div>
        <br>
        <div>
        <label for="car">Que Coche Prefieres?</label>
        <br>
        <div>
            <img width="10%" class="img" src="img/c1.JPG" alt="">
          <br>  <input type="radio" name="car" id="C1" required>
            <label for="C1">Mini Coche</label>
        </div>
        <div>
            <img width="10%" class="img" src="img/c2.JPG" alt="">
            <br>  <input type="radio" name="car" id="c2" required>
              <label for="C2">Opcion 2</label>
        </div>
        <div>
            <img width="10%" class="img" src="img/c3.JPG" alt="">
            <br>  <input type="radio" name="car" id="c3" required>
              <label for="C3">Opcion 3</label>
             
        </div>
        <br>
    </div>
<div>
    <input type="submit"value="Siguiente">
</div>
    </form>
</body>
</html>