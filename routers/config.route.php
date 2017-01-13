<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/config.model.php';

$app->get('/config', function(){
  $config = \config::all();
    echo $config->toJson();
});
$app->get('/config/{id}', function($req, $res, $args){
  $config = \config::findOne($args['id']);
    echo $config->toJson();
});
