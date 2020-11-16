<?php
/*
Plugin Name: Мой 
*/
function error1($error) {
	
$f=fopen("error1.txt","a+"); 
if  (filesize("error1.txt") != 0) {
$text=fread($f,filesize("error1.txt"));
	fclose($f);
}
	$f=fopen("error1.txt", "w");
	$write="Error: $error ";
	fwrite($f, $write . $text);
	fclose($f);
}