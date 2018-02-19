<?php

	class Conexion{

		private $dbusuario = "root";
		private $dbpassword = "";
		private $dbhost = "localhost";
		private $dbname = "db_renta_vehiculo";

		public function __construct(){
			$conecta = new mysqli($dbhost, $dbusuario, $dbpassword);
			$conecta->set_charset("utf8");
			$conecta->select_db($conecta);
		}

	}

	$con = new Conexion();
	

?>