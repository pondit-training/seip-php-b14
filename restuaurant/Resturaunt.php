<?php 
require_once 'Hotel.php';


class Resturant
{
    use Hotel;
    // use MiniResort;

    static function welcome()
    {
        echo 'welcome to our resturant.';
    }
    
    function cook()
    {
        echo 'Food is being cooked...';
    }
}
