<div class="form-group">
  <label for="search">Buscar: </label>
  <input type="search" name="search" class="form-control" id="buscar" onKeyUp="buscar()">
</div>
<table class="table" id="tabla-pelis">
  <thead class="thead-dark">
    <tr>
      <th>Título</th>
      <th>Año</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($arrayPeliculas as $peli) {
    ?>
      <tr id="<?php echo $peli->getId(); ?>">
        <td id="nombre-peli"><?php echo $peli->getNombre(); ?></td>
        <td><?php echo $peli->getAno(); ?></td>
      </tr>
    <?php
      }
    ?>
  </tbody>
</table>
