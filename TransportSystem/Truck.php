<?php
	namespace TransportSystem;
	require_once "Vehicle.php";


	
	class Truck extends Vehicle
	{
		public function __construct($name)
		{
			$this->name = $name;
			$this->minFuelConsumption = 0.10;
			$this->goodsLoad = 0;
	
			echo "New Truck <b>{$this->name}</b> has been created.<br>";
		}

		function load($qty)
		{
			$this->goodsLoad += $qty;
			return "Taking {$qty} of goods...";
		}

		function unload($qty)
		{
			return "";
		}

		function design()
		{
			return "";
		}
	}
?>