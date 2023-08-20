<pre>
<?php 

// defining an array
$fruits = array('Apple', 'Banana', 'Cherry'); // [...,...,...]

// Printing an array:
// var_dump($fruits);
// print_r($fruits);

// Accessing Array elements:
// echo $fruits[2];


// echo count($fruits);

$fruits[1] = 'Mango';
// echo $fruits[1];



// adding elements to the end of an array:
array_push($fruits, 'Water melon', 'Jack-fruit', 'Grapes');
$fruits[50] = 'Strawberry';
$fruits[] = 'Dragon';


// adding elements to the beginning of an array:
array_unshift($fruits, 'Raspberry');



// removing the last element of an array:
array_pop($fruits);

// removing the first element of an array:
array_shift($fruits);


// echo count($fruits);


array_push($fruits, 'Pineapple', 'Lychee', 'Rambutan', 'Bangi');



$bondhur_plate = array_slice($fruits, 3, 5, true);
// print_r($fruits);
// print_r($bondhur_plate);



array_splice($fruits, 4, 0, ['Guava','Berry']);
// print_r($fruits);


// two types of array
// index array [1,2,3,'a','b'...]
/* associative array : key=>value pair
   [
      'a' => 'abcxc',
      'b' => '....',
      'xyz' => 'ttrt',
      1 => 
   ]
 */


 $capitals = [
    'Afghanistan'   => 'Kabul',
    'Bangladesh'    => 'Dhaka',
    'Canada'        => 'Ottawa',
    'Denmark'       => 'Copenhagen',
];

// array_push($capitals, 'England');
$capitals['Egypt'] = 'Cairo';
$capitals['Finland'] = 'Helsinki';

var_dump($capitals);


var_dump(array_key_exists('Bangladesh', $capitals));


