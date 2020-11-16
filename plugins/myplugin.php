<?php
/*
<<<<<<< HEAD
Plugin Name: Мой 
=======
Plugin Name: Мой плагин
>>>>>>> abbb270aeacd75465482714d15996a613f9c677e
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