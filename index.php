<?php

	echo "My page" . PHP_EOL;
	echo "Continue changes on branch Master" . PHP_EOL . "<br>";

	use igorvikn\math\Multipl ;

	include 'vendor/autoload.php';

	$Mymath = new Multipl();
	echo $Mymath->multiply(5, 5);

//echo phpinfo();


?>
