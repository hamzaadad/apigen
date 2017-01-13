Slim Eloquent
=============

This is a starting point for building small application on Slim using Eloquent ORM.

## Installation 

To install, simply clone this repo and run composer install:

    git clone https://github.com/aaronmarruk/slim-eloquent.git
    curl -sS https://getcomposer.org/installer | php
    php composer.phar install

## Configuration

To configure, rename config.example.php to config.php, adding your local environment settings.

    Config::write('db.driver', 'mysql');
    Config::write('db.host', 'localhost');
    Config::write('db.dbname', 'exampledb');
    Config::write('db.username', 'root');
    Config::write('db.password', 'root');
    Config::write('db.charset', 'utf8');
    Config::write('db.collation', 'utf8_general_ci');
    Config::write('db.prefix', '');

## Example

As an example we have a post route which creates a Post table in our database, adds a single post to table and prints result.

    class Post extends \Illuminate\Database\Eloquent\Model
    { 
        protected $table = 'posts';
        protected $guarded = array();
        // The table rows that we want to allow mass assignment on
        protected $fillable = ['id', 'title', 'author'];

    }

    $app->get('/example', function () {

        Capsule::schema()->dropIfExists('posts');
        Capsule::schema()->create('posts', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->timestamps();
        });
        // Fetch all posts
        $posts = \Post::all();
        echo $posts->toJson();

        // Or create a new post
        $post = new \Post(array(
            'title' => 'This is an Example post',
            'author' => 'Clive Cussler'
        ));
        $post->save();
        echo $post->toJson();
    });

## Seeds and Migrations

Not got this set up properly yet. So don't try to use it, because it won't work.

## Credit

- [Slim Eloquent by Kaldd](https://github.com/kladd/slim-eloquent). 
- [This post by Josh Lockhart](http://www.slimframework.com/news/slim-and-laravel-eloquent-orm) 
- [This post by Code Bright](http://daylerees.com/codebright/eloquent)
- [This post](http://laravel.io/forum/03-06-2014-using-illuminatedatabase-outside-of-framework)


I couldn't seem to build and run kaldd's repo so I ended rebuilding it. Credits go to Kaldd for initial inspiration.
