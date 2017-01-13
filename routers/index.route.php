<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Autoload our dependencies with Composer
require 'vendor/autoload.php';

$app->get('/install', function () {
    echo "ok";
    require '/database/db.connection.php';
    $db = SPDO::getInstance(True);


    $result =  $db->query("show tables;")->fetchAll(PDO::FETCH_ASSOC);
    $model = file_get_contents("models/empty.model.php");
    $route = file_get_contents("routers/empty.route");
    foreach($result as $key => $val){
      $sql = "select column_name from information_schema.columns where table_name = '".$val['Tables_in_caisse']."'";
      echo "<br>".$val['Tables_in_caisse']."<br>";
      $fields = "";
      $column = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
      foreach ($column as $keyc => $valuec) {
        $fields .= "'".$valuec['column_name']."',";
      }
      echo substr($fields, 0, -1);
      $newmodel = str_replace("{fields}", substr($fields, 0, -1), $model);
      $newmodel = str_replace("{model}", $val['Tables_in_caisse'], $newmodel);
      $newroute = str_replace("{model}", $val['Tables_in_caisse'], $route);
      file_put_contents("models/".$val['Tables_in_caisse'].".model.php", "<?php ".$newmodel);
      file_put_contents("routers/".$val['Tables_in_caisse'].".route.php", "<?php ".$newroute);
    }

});
