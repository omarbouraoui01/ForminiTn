<?php
	class reservation{
		private $id;
		private $id_user;
		private $id_f;
        private $dater;
		
		
		
		
		function __construct($id, $id_user, $id_f,$dater){
			$this->id_reservation=$id_reservation;
			$this->id_user=$id_user;
			$this->id_f=$id_f;
            $this->dater=$dater;
		}
			

		function getid_reservation(){
			return $this->id;
		}
		function getiduser(){
			return $this->id_user;
		}
        function getidformation(){
			return $this->id_f;
		}
		function getdate(){
			return $this->dater;
		}
		function setid_reservation(string $id_reservation){
			$this->id=$id_reservation;
		}
		function setiduser(string $id){
			$this->id_user=$id;
		}
        function setidformation(string $id){
			$this->id_f=$id;
		}
		function setdate(string $dater){
			$this->dater=$dater;
		}
		
		
	}


?>