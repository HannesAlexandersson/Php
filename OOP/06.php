<?php
__DIR__ . require 'src/server.php';
__DIR__ . require 'src/channel.php';
/*
Create the class Server which accepts the properties $name and $channels. 
Create the class Channel which accepts the properties $name and $type. 
If the type isn't equal to either text or voice, throw a new exception 
with the message Invalid channel type [the-type-parameter].. 
Within the exercise file, run the snippet below within a try/catch.
*/

try{
  $server = new Server('Webbutvecklare', [
    new Channel('backend', 'text'),
    new Channel('frontend', 'editor'),
]);
}catch(Exception $e)
{
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}