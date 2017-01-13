<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/devis.model.php';

$app->get('/devis', function(){
  $devis = \devis::all();
    echo $devis->toJson();
});
$app->get('/devis/{id}', function($req, $res, $args){
  $devis = \devis::findOne($args['id']);
    echo $devis->toJson();
});
