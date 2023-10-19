<?php
    Class Usuario{

        private $id;
        private $nombre;
        private $apepat;
        private $apemat;
        private $email;
        private $password;
        private $email;
        private $fecha_registro;
    }

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApepat(){
		return $this->apepat;
	}

	public function setApepat($apepat){
		$this->apepat = $apepat;
	}

	public function getApemat(){
		return $this->apemat;
	}

	public function setApemat($apemat){
		$this->apemat = $apemat;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getFecha_registro(){
		return $this->fecha_registro;
	}

	public function setFecha_registro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	} 

?>