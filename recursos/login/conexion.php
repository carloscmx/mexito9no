<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=sql204.epizy.com;dbname=epiz_25909392_baselogin','epiz_25909392','geniux481',$pdo_options);
			return self::$conexion;
		}
	}
?>