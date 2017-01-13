<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'models/users.model.php';

$app->get('/users', function(){
  $users = \users::all();
    echo $users->toJson();
});
$app->get('/users/:id', function($id){
  $users = \users::where("Id_User", $id)->first();
  if(count($users) > 0){
    echo $users->toJson();
  }else{
    echo json_encode(array("message" => "empty"));
  }

});
