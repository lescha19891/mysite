<?php
/*
Plugin Name: Мой плагин
*/
function error1($error) {
<<<<<<< HEAD
$filename = 'error1.log';
=======
$filename = 'error1';
>>>>>>> abbb270aeacd75465482714d15996a613f9c677e
$write="Error: $error ";
file_put_contents($filename, $write);
}
	