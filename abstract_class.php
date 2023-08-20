<pre>
<?php 

abstract class Player
{
    protected $type = '';
    protected $name = '';


    abstract protected function play();
}

class Cricketer extends Player
{
    function __construct($name)
    {
        $this->type = 'Cricketer';
        $this->name = $name;
    }

    function play()
    {
        echo 'ছক্কা <br>';
    }
}
class Footballer extends Player
{
    function __construct($name)
    {
        $this->type = 'Footballer';
        $this->name = $name;
    }
    function play()
    {
        echo 'গোল <br>';
    }
}

$p1 = new Cricketer('Sakib Al Hasan');

var_dump($p1);
$p1->play();

$p2 = new Footballer('Jamal Bhuiyan');
var_dump($p2);
$p2->play();