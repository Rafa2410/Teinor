<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/config/config.inc.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/model/business/class_pelicula.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/model/persistence/class_peliculaDAO.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/teinor/model/persistence/class_db.php';

		$peliculaDAO = new peliculaDAO();

		$arrayPeliculas = $peliculaDAO->verPeliculas();

	require_once 'view/list_peli.php';
?>
