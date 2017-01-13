<?php

use Illuminate\Database\Capsule\Manager as CapsuleManager;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

include 'config.php';

class Capsule extends CapsuleManager
{

  function __construct()
  {

    parent::__construct();

    // $ci = &get_instance();
    // $db = $ci->db;
    $this->addConnection(array(
        "driver"    => DB_driver,
        "host"      => DB_host,
        "database"  => DB_dbname,
        "username"  => DB_username,
        "password"  => DB_password,
        "charset"   => DB_charset,
        "collation" => DB_collation,
        "prefix"    => DB_prefix
    ));

    $this->setEventDispatcher(new Dispatcher(new Container));

    // Make this Capsule instance available globally via static methods... (optional)
    $this->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $this->bootEloquent();
  }
}
