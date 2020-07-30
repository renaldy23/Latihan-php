<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';


$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->yell("Auooo"); // "Auooo"
echo "<br>";
echo $sungokong->name;
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "<br>";
echo $kodok->name;


?>