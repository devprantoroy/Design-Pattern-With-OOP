<?php
include_once('vendor/autoload.php');
use App\Config\Config;
include 'db_connect.php';
$obj = new Config($_ENV);
print_r($obj);




