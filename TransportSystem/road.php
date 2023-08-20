<?php
	//require_once "Vehicle.php";
	require_once "Truck.php";
	require_once "Bus.php";

	use TransportSystem\Bus as BB;
	use TransportSystem\Truck as TT;
	
	$myTruck = new TT('Ashok Leleand 2010');
	$myBus = new BB('Hino 1J');
	
	echo $myBus->move();
	echo $myBus->reFuel(5);

	$varName = 'myBus';


	$myBus->load(5);
	
	for($i=0; $i<11; $i++)
	{
		echo ${$varName}->move("Left");
		echo ${$varName}->move("Right");
		echo ${$varName}->move("Back");
		echo ${$varName}->move("Font");
	}

	$myBus->unload(6);

?>