<?php
namespace TransportSystem;

abstract class Vehicle
{
	protected  $name;
	protected  $wheel;
	protected  $color;
	protected  $brand;
	protected  $fuelCapacity;
	protected  $fuelStock;
	protected  $minFuelConsumption;
	
	
	public function move($dir="forward")
	{
		if($this->fuelStock==0)
			return "No Fuel.<br>";
		else if($this->fuelStock>=$this->minFuelConsumption)
		{
			$this->fuelStock-=$this->minFuelConsumption;
			//echo $this->fuelStock;
			return "{$this->name} is moving {$dir} --- {$this->fuelStock} <br>";
		}
		else 
			return "No Minimum Fuel Consumption. Unable to move.<br>";
	}
	
	protected function stop()
	{
		return "{$this->name} can stop.<br>";
	}
	
	public function reFuel($qty)
	{
		$this->fuelStock += $qty;
		return "{$this->name} is refueling with {$qty} L.<br>";
	}
	
	abstract protected function load($qty);
	
	abstract protected function unload($qty);
	
	abstract protected function design();
}
?>