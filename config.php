<?php
require_once __DIR__ . "/vendor/autoload.php";
$manager = new MongoDB\Client;
// echo "Connection to database successfully";

$db = $manager->minimarket;
// echo "Database 'minimarket' selected";


?>