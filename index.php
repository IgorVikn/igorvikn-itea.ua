<?php

    echo "My page" . PHP_EOL;
	        
    use GuzzleHttp\Client;

    include 'vendor/autoload.php';

    $new_client = new Client();

    $itea_body = $new_client->get('https://itea.ua');

    echo $itea_body->getBody()->getContents();
        
    //echo phpinfo();


?>
