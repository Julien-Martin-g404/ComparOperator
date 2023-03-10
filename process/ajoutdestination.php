<?php

include('../utils/bdd.php');
include('../classes/Manager.php');


$location = $_POST['destination'];
$tarif = intval($_POST['tarif']);
$tourOperatorId = intval($_POST['agence']);
$image = $_POST['image'];

$manager = new Manager($db);

echo $location . "<br>";
echo $tarif . "<br>";
echo $tourOperatorId . "<br>";
echo $image . "<br>";



$manager->add($location, $tarif, $tourOperatorId, $image);
