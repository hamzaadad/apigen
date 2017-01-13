<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/client.model.php';

$app->get('/client', function(){
  $client = \client::all();
    echo $client->toJson();
});
$app->get('/client/{id}', function($req, $res, $args){
  $client = \client::findOne($args['id']);
    echo $client->toJson();
});
