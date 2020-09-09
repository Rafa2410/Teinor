<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teinor</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Fin bootstrap -->
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="plugin/tablesorter/js/jquery.tablesorter.js"></script>
    <!-- Fin jquery -->
    <script type="text/javascript">
      //Buscar en la tabla
      function buscar() {
        let val = $('#buscar').val().toLowerCase();
        if (typeof(val) != "undefined" && val != null) {
          $('#tabla-pelis > tbody > tr > #nombre-peli').each(function(index, nombre) {
            let nombrePeli = nombre.textContent.toLowerCase();
            if (!nombrePeli.includes(val)) {
              $(`#${index+1}`).hide();
            } else {
              $(`#${index+1}`).show();
            }
          });
        }
      }
      //Mostrar/Ocultar formulario
      function eventForm() {
        if (!$('.formulario-peli').is(':visible')) {
          $('.formulario-peli').show();
          $('#boton-pelis').html('Cancelar');
          $('#boton-pelis').removeClass('btn-primary');
          $('#boton-pelis').addClass('btn-danger');
        } else {
          $('.formulario-peli').hide();
          $('#boton-pelis').html('Añadir película');
          $('#boton-pelis').removeClass('btn-danger');
          $('#boton-pelis').addClass('btn-primary');
        }
      }
      //Plugin tablesorter para ordenar las columnas utilizando jquery
      $(function(){
        $("#tabla-pelis").tablesorter();
      });
    </script>
    <style media="screen">
      .table thead {
        cursor: pointer;
      }
      .formulario-peli {
        display: none;
      }
    </style>
  </head>
  <body>
    <?php

    require_once 'controller/list_peli_ctl.php';

    ?>
    <button class="btn btn-block btn-primary" onClick="eventForm()" id="boton-pelis">Añadir película</button>
    <?php

    require_once 'controller/create_peli_ctl.php';

    ?>
  </body>
</html>
