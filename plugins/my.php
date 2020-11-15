<?php
/*
Plugin Name: Мой плагин
*/
function error1($error) {
$filename = 'error1';
$write="Error: $error ";
file_put_contents($filename, $write);
}
	