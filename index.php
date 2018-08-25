<?php
// json file 

$url = 'innisfree-products.json';
$json = file_get_contents($url);
$data = json_decode($json);

?>