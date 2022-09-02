<?php
    class User
    {
		public $id;
        public $nom;
        public $prenom;
        public $sexe;
		public $email;
		public $logg;
		public $daten;
		public $pass;
		public $rol;

    

        function __construct($id,$nom, $prenom, $sexe, $email , $logg,$daten,$pass,$rol){
			$this->id=$id;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->sexe=$sexe;
			$this->email=$email;
			$this->logg=$logg;
			$this->daten= $daten;
			$this->pass=$pass;
			$this->rol=$rol;
		}
	
    function setid(string $id){
		$this->id=$id;
	}
	function setNom(string $Nom){
		$this->Nom=$Nom;
	}
	function setprenom(string $prenom){
		$this->prenom=$prenom;
	}
	
	function getid(){
		return $this->id;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getNom(){
		return $this->nom;
	}
	function getsexe(){
		return $this->sexe;
	}
	function getlog(){
		return $this->logg;
	}
	function getpass(){
		return $this->pass;
	}
	
 
	function getdate()
	{
			return $this->daten;
	}
	function getmail(){
		return $this->email;
	}
	function getrole(){
		return $this->rol;
	}
	
	
	}
	

?>