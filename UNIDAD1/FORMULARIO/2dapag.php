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
        <form action="#"></form>
        <div>
            <label for="Nombre">¿Qué tipo de dispositivos tienes en casa?</label>
            <br>
            <br>
            <input type="checkbox" name="tablet" id="tablet">
            <label for="tablet">Tableta</label>
            <br>
            <input type="checkbox" name="smartphone" id="smartphone">
            <label for="smartphone">Smartphone</label>
            <br>
            <input type="checkbox" name="pc" id="pc">
            <label for="pc">PC</label>
            <br>
            <input type="checkbox" name="laptop" id="laptop">
            <label for="laptop">PC</label>
            <br>
            <input type="checkbox" name="otro" id="otro">
            <label for="otro">Otro:</label>
            <input type="text" name="otro" id="otro">
            <br>
        </div>
        <div>
            <p>ELIGE TU CARRERA</p>
            <select name="carrera" id="carrera" >
                <option value="Elige">Elige</option>
                <option value="ITI">ITI</option>
                <option value="LCIA">LAYGE</option>
                <option value="IM">IM</option>
                <option value="ISA">ISA</option>
                <option value="ISA">LCIYA</option>
                <option value="ISA">ITM</option>
            </select><br>
        </div>
        <div>
           <br> <label for="Comentario">Escribe un comentario</label>
            <h1></h1>
            <input type="text"name="Comentario" id="Comentario" placeholder="Tu comentario va aqui" required >
        </div>
        <div>
<br>   <p>CUAL ES TU NIVEL DE INGLES?</p>
<pre>      1  2  3  4  5</pre>
<span>Basico </span>
<input type="radio" name="I" id="">
<input type="radio" name="I" id="">
<input type="radio" name="I" id="">
<input type="radio" name="I" id="">
<input type="radio" name="I" id="">
<span>Mas Avanzado</span>
        </div>
        <br>
        
        <div>
           
            <label for="COM">DANOS TU OPINION</label>
            <pre>                               MALO     REGULAR    BUENO    EXCELENTE  </pre>
            <span>Servicio al Cuarto/habitacion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </span>
            <input  type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            <br>
            <span>Restaurante &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp; &emsp; </span>
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;&nbsp;&nbsp;
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;&nbsp;&nbsp;
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            <br>
            <span>Servicio de R &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp; &emsp; </span>
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            &emsp;&emsp;&emsp;
            <input type="radio" name="mrbe" id="">
            
            <br>
            <p>Fecha de Cumpleaños</p>
            <input type="date" name="" id="">
            
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <form action="index.php" method="get">
            <input type="submit" value="Atras">
        </form>
    </div>
        </div>
</body>
</html>