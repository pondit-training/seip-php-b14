<?php 

echo '<h1 align="center">PHP: OOP</h1>';
echo '<pre>';

class Vehicle
{
    public $name    = '';
    public $wheels  = 0;
    public $runsOn  = '';
    public $fuel    = '';


    function __destruct()
    {
        echo 'কাজ শেষ';
    }

    public function getIdentity()
    {
        return "I am a {$this->name}, I have {$this->wheels} {$this->wheelText}, I runs on {$this->runsOn}, I need {$this->fuel}.";
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function __construct($name, $wheels, $runsOn, $fuel)
    {
        $this->name = $name;
        $this->wheels = $wheels;
        $this->runsOn = $runsOn;
        $this->fuel = $fuel;
        $this->wheelText = $this->wheels==1 ? 'wheel' : 'wheels';
        echo 'অবজেক্ট তৈরি হয়েছে';
    }


}

$v1 = new Vehicle('Rickshaw', 3, 'Road', 'Electricity');
$v2 = new Vehicle('Cart', 1, 'Road', 'Mussle pwr');
$v3 = new Vehicle('Water bus', 0, 'Water', 'Diesel');

// $v1->name = 'Car';
// $v1->setName('Rickshaw');

var_dump($v1->getIdentity());
var_dump($v2->getIdentity());
var_dump($v3->getIdentity());
