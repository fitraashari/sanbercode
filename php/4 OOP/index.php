<?php
require_once "Animal.php";
require_once "Ape.php";
require_once "Frog.php";

$sheep = new Animal("shaun");
echo "Nama Hewan: ".$sheep->get_name(); // "shaun"
echo "<br>";
echo "Berkaki: ".$sheep->get_legs(); // 2
echo "<br>";
echo "Berdarah Dingin: ".$sheep->get_cold_blooded(); // false
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Nama Hewan: ". $sungokong->get_name();
echo "<br>";
echo "Berkaki: ".$sungokong->get_legs();
echo "<br>";
echo "Berdarah Dingin: ".$sungokong->get_cold_blooded(); // false
echo "<br>";
echo $sungokong->yell(); // "Auooo"
echo "<br>";
echo "<br>";

$kodok = new frog("buduk");
echo "Nama Hewan: ".$kodok->get_name();
echo "<br>";
echo "Berkaki: ".$kodok->get_legs();
echo "<br>";
echo "Berdarah Dingin: ".$kodok->get_cold_blooded(); // false
echo "<br>";
echo $kodok->jump(); // "Hop Hop"
