<?php
// json file 

$url = 'innisfree-products.json';
$json = file_get_contents($url);
$json = str_replace("[[[", "[", $json);

$data = json_decode($json);

echo " ";


foreach ($data as $key => $value) {
	echo "<ul style='overflow: '>";
	echo "<li >".$value->sku."</li>";
	echo "<li >".$value->product_name_en."</li>";
	echo "<li>".$value->product_name_ja."</li>";
	echo "<li >".$value->short_description_ja."</li>";
	echo "</ul>";

}


echo "
    

";

echo $json;



?>