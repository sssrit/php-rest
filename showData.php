<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

require_once('DBCon.php');
require_once('employee.php');

$db = new DBCon('localhost','classicmodels','root','');

$emp = new employee($db->dbConnect());

$emp->findAll();



?>