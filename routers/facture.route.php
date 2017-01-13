<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/facture.model.php';

$app->get('/facture', function(){
  $facture = \facture::all();
    echo $facture->toJson();
});
$app->get('/facture/{id}', function($req, $res, $args){
  $facture = \facture::findOne($args['id']);
    echo $facture->toJson();
});
