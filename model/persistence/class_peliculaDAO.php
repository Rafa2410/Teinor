<?php

class peliculaDAO {

  public function inserir($pelicula) {
    $query="insert into pelicula (nombre, ano) values ('".$pelicula->getNombre()."', ".$pelicula->getAno().")";
    
		$con = new db();
		$resultat = $con->consulta($query);
		$con->close();

		return $resultat;
  }

  public function verPeliculas() {
    $query="SELECT * FROM pelicula;";

    $con = new db();
		$consulta = $con->consulta($query);
		$con->close();

		$arrayPeliculas = array();
		foreach ($consulta as $row) {
		  $pelicula = new pelicula($row["nombre"], $row["ano"]);
	    $pelicula->setId($row["id"]);
	    array_push($arrayPeliculas, $pelicula);
    }

		return $arrayPeliculas;
  }

}

 ?>
