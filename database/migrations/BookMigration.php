<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class BookMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('books');
        Capsule::schema()->create('books', function($table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
    }
}

class Book extends \Illuminate\Database\Eloquent\Model
{

}
