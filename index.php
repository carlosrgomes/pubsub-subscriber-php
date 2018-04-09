<?php 
use \Psr\Http\Message\ServerRequestInterface as Request; 
use \Psr\Http\Message\ResponseInterface as Response; 

require './vendor/autoload.php'; $app = new \Slim\App; 


$app->post('/_ah/push-handlers/subscriber1', function (Request $request, Response $response) use ($app) {
   
    $json = $request->getBody();
   
    syslog(LOG_INFO,   $json);
});

$app->run();
