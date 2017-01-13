<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/produits.model.php';

$app->get('/produits', function(){
  $produits = \produits::all();
    echo $produits->toJson();
});
$app->get('/produits/{id}', function($req, $res, $args){
  $produits = \produits::findOne($args['id']);
    echo $produits->toJson();
});
