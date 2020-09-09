<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/config/config.inc.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/model/business/class_pelicula.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/model/persistence/class_peliculaDAO.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/model/persistence/class_db.php';

  $peliculaDAO = new peliculaDAO();

  $msg = null;
  try {
    //Si venimos de hacer submit del formulario
    if (isset($_REQUEST['submit'])) {
      //Creamos la pelicula e inicializamos todo en null
      $pelicula = new pelicula(null, null);
      //Asignamos los valores recibidos desde el formulario
      if (isset($_REQUEST['nombre'])) {
        $pelicula->setNombre($_REQUEST['nombre']);
      }
      if (isset($_REQUEST['ano'])) {
        $pelicula->setAno($_REQUEST['ano']);
      }
      $resultat = $peliculaDAO->inserir($pelicula);

      if ($resultat) {
        header('Location: ../index.php');
      }
      //Si no venimos del submit, mostramos el formulario
    } else {
      require_once 'view/form_create_peli.php';
    }
  } catch (Exception $e) {
    $msg = "Error en introducir los datos .$e";
  }

  if ($msg != null) {
  	printMsg($msg);
  }
?>
