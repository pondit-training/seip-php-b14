<?php
	namespace TransportSystem;
	require_once "Vehicle.php";

	
	class Bus extends Vehicle
	{
        public function __construct($name)
        {
            $this->name = $name;
            $this->minFuelConsumption = 0.10;
            $this->passangers = 0;
    
            echo "New Bus <b>{$this->name}</b> has been created.<br>";
        }

		function load($qty)
		{
            $this->passangers+=$qty;
			echo "Picked {$qty} persons. Total passangers {$this->passangers}<br>";
		}
		function unload($qty)
		{
            $this->passangers -= $qty;
			echo "Dropped {$qty} persons. Total passangers {$this->passangers} <br>";
		}
		function design()
		{
			return "";
		}
	}
?>