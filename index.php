<?php
include __DIR__ . '/User.php';

$pippo = new User('pippo', 30);
var_dump($pippo);

$pluto = new User('pluto', 70);
var_dump($pluto);
echo '<br>Gli oggetti di tipo User instanziati sono ' . $pippo::$counter_of_objects;

$pinco = new User('pinco', 5);
echo '<br>Gli oggetti di tipo User instanziati sono ' . User::$counter_of_objects;

var_dump($pinco);
echo '<br>';
echo $pinco->getDiscount(50);
echo '<br>';
echo $pinco->getDiscount(150);
echo '<br>';
echo $pinco->getDiscount(70);
echo '<br>';

echo 'Prezzo scontato ' . User::calculateDiscountValue(100, 20);

$pinco = null;
echo '<br>Gli oggetti di tipo User instanziati sono ' . $pippo::$counter_of_objects;
