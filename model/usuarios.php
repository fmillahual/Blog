<?php

class Usuario{

  private $id;
  private $nombre;
  private $email;
  private $foto;
  private $clave;


function __construct(){}

      public function getNombre(){
  		return $this->nombre;
  		}

  		public function setNombre($nombre){
  			$this->nombre = $nombre;
  		}

  		public function getEmail(){
  			return $this->email;
  		}

  		public function setEmail($email){
  			$this->email = $email;
  		}

  		public function getFoto(){
  		return $this->foto;
  		}

  		public function setFoto($foto){
  			$this->foto = $foto;
  		}

      public function getClave(){
        return $this->clave;
      }

      public function setClave($clave){
        $this->clave = $clave;
      }

  		public function getId(){
  			return $this->id;
  		}

  		public function setId($id){
  			$this->id = $id;
  		}


}

 ?>
