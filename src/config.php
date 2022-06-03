<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','vitsic');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,3307);

if($link === false){
  die("ERROR: Could not connect." . mysqli_connect_error());
}
?>
