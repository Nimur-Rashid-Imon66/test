<?php

echo "Hello Nimur" ;
echo "<br>" ;

$first_variable_in_php = 1;
echo "My first variable in php is : $first_variable_in_php <br>";
$data = array(4,6,7,8,9);

echo "<br>For loop : <br>" ;
for ($x = 0; $x < 5; $x++) {
    echo "The $x number is: $data[$x] <br>";
}


$friend_name = array("Abul","Kabul","Babul","Tutul","Mukul");

echo "<br>Foreach loop : <br>" ;
foreach ($friend_name as $value) {
    echo "$value <br>";
}


// echo "<pre>";
// var_dump($data);
?>