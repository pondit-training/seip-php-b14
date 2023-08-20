<?php
	require_once "Vehicle.php";
	
	class Crane extends Vehicle
	{
		public function __construct()
		{
			$this->name = "Crane";
			$this->wheel = "8";
			$this->color = "Yellow";
			$this->brand = "Tata";
		}
		function load()
		{
			return "";
		}
		function unload()
		{
			return "";
		}
		function design()
		{
			return "";
		}
	}
?>