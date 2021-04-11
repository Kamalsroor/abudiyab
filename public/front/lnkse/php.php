<?php

$path = $_POST['path'].'/*.'.$_POST['type'];

$images = glob($path);

$i = $_POST['i'];

if (isset($images[$i])) {
	$img = $images[$i];
    echo $img;
}
else{
	echo 0; // The value 0 is sent, because there are no images
}