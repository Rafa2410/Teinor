<?php

class pelicula {
  public $id;
  public $nombre;
  public $ano;

  public function __construct($nombre, $ano){
    $this->setId(null);
    $this->setNombre($nombre);
    $this->setAno($ano);
  }

  public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

  public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($value){
		$this->nombre = $value;
	}

  public function getAno(){
		return $this->ano;
	}

	public function setAno($value){
		$this->ano = $value;
	}

}

 ?>
