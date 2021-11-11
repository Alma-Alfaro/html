<?php

    require 'conexionBD.php';

    $requiereConsultar="SELECT * FROM asistentesRegistro";
    $requiereConsultarTabla=mysqli_query($conexion,$requiereConsultar);

?>