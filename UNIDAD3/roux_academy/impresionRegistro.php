<?php
  require('encabezadoAdmin.php');
  if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
  }
  echo 
    "<script>
      function cerrar(){
        if(confirm('¿Realmente desea salir?')){
          document.location='terminarSesion.php';
        }
    }
    </script>";
?>
<!-- Rotator -->
<section id="main">
  <div class="centrarTabla">
    <table class="estilosTabla">
      <thead>
        <tr>
          <th class="Titulos">Nombre</th>
          <th class="Titulos">Compañia</th>
          <th class="Titulos">Correo Electronico</th>
          <th class="Titulos">Comentario</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
        require ('consulTabla.php');
        foreach ($requiereConsultarTabla as $direccion){?>
        <tr>
          <td class="TextoNombre"><?php echo $direccion['nombre']?><br><br></td>
          <td class="Texto"><?php echo $direccion['compañia']?><br><br></td>
          <td class="Texto"><?php echo $direccion['email']?><br><br></td>
          <td class="TextoDos"><?php echo $direccion['coments']?><br><br></td>
        </tr>
      </tbody>
        <?php
      }
      ?>
    </table>
</div>
</section>
<?php
include('piePagina.php');
?>
</div>
</body>
</html>