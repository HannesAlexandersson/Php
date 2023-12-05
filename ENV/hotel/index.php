<?php
require_once __DIR__.'/../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$client = new Client([
    'base_uri' => 'https://yrgopelag.se/test/index.php',
    'timeout'  => 2.0,
    'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        'Authorization' => 'Bearer ' . $_ENV['API_KEY'],
    ],
]);

try {
    
    $response = $client->request('POST', 'https://www.yrgopelag.se/test/index.php', [
        'form_params' => [
            'startCode' => 'bad0ecb0-399d-48d8-88ee-15ac509e19e4',
        ],
    ]);
    
    $body = $response->getBody()->getContents();

    
    $data = json_decode($body, true);
    echo $_ENV['API_KEY'];//skriv ut api nyckeln innan den skrivs över med nya value
    $_ENV['API_KEY'] = $data["password"];//skriv över api nyckeln med den nya value
    echo $_ENV['API_KEY'];//skriv ut api nyckeln efter den skrivs över med nya value för att se om det lyckades OBS DET FUNKAR DEN NYA VALUET SKRIVS UT,MEN DEN VERKAR INTE SKRIVA ÖVER SJÄLVA VALUET I FILEN PÅ RIKTIGT
    
    /*OM JAG VILL PERMANENT SKRIVA ÖVER VÄRDET I .ENV FILEN SÅ SKA JAG ANVÄNDA FÖLJANDE KOD
    putenv('API_KEY=' . $_ENV['API_KEY']);    
    $dotenv->save();
    */
    if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
        
        echo "Request was successful!\n";
        var_dump($data); 
       
    } else {
       
        echo "Error: " . $response->getStatusCode() . "\n";
        var_dump($data); 
    }
} catch (ClientException $e) {echo "Exception: " . $e->getMessage() . "\n";
};