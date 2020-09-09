<div class="container formulario-peli">
  <form action="controller/create_peli_ctl.php" method="post">
    <div class="form-group">
      <label for="nombre">Título</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el título de la película">
    </div>
    <div class="form-group">
      <label for="ano">Fecha</label>
      <input type="number" class="form-control" id="ano" name="ano" placeholder="Introduce la fecha de publicación">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Añadir</button>
  </form>
</div>
