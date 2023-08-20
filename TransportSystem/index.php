<?php
	require_once "Vehicle.php";
	
	class Truck extends Vehicle
	{
		public function __construct()
		{
			$this->name = "Truck";
			$this->wheel = "4";
			$this->color = "Yellow";
			$this->brand = "Tata";
		}
		function load()
		{
			return "";
		}
		function unload()
		{
			
		}
		function design()
		{
			
		}
	}
?>