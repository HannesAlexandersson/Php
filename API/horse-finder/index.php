<?php
declare(strict_types=1);
require '/vendor/autoload.php';
use GuzzleHttp\Client; // adds the client
use GuzzleHttp\Exception\ClientException; // adds the exception if something goes wrong
echo json_decode($response->getBody()->getContents());
