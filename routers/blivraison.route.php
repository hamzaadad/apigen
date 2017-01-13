<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/blivraison.model.php';

$app->get('/blivraison', function(){
  $blivraison = \blivraison::all();
    echo $blivraison->toJson();
});
$app->get('/blivraison/{id}', function($req, $res, $args){
  $blivraison = \blivraison::findOne($args['id']);
    echo $blivraison->toJson();
});
