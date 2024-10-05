<?php

$json_data = '{"name":"Devi Kartika","age":20,"city":"Semarang"}';


$obj = json_decode($json_data);


echo "Name: " . $obj->name . "<br>";
echo "Age: " . $obj->age . "<br>";
echo "City: " . $obj->city . "<br>";

$array = json_decode($json_data, true);

echo "Name: " . $array['name'] . "<br>";
echo "Age: " . $array['age'] . "<br>";
echo "City: " . $array['city'] . "<br>";
?>
