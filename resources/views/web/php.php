<?php

$path = __FILE__.'/*';
$path = str_replace('\\', '/', $path);
$path = str_replace('/resources/views/web/php.php', '/public/front/img/brands', $path);
// $path = str_replace('C:', '', $path);
//$path = '/abudiyab/public/front/img/brands/*.'.$_GET['type'];

$images = glob($path);

$i = $_GET['i'];

if (isset($images[$i])) {
	$img = $images[$i];
    echo $img;
}
else{
	echo 0; // The value 0 is sent, because there are no images
}
//print_r($images);
//echo $path;