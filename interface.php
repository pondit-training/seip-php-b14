<pre>
<?php 

interface Shape
{
    public function area();
    public function circum();
}


class Circle implements Shape
{
    function __construct($radius)
    {
        $this->radius = $radius;
    }
    function area()
    {
        echo 'Area of the circle is:'. pi()*$this->radius**2 . 'squ';
    }

    public function circum(){
        echo 'Circum of the circle is:'. 2* pi()*$this->radius . 'u';
    }

}


$s1 = new Circle();

$s1->area();
$s1->circum();