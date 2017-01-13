<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);
use lib\Config;
// Autoload our dependencies with Composer
require 'vendor/autoload.php';
require 'database/Capsule.php';

// Set up the db connection via Eloquent Capsule
$capsule = new Capsule;

$app = new \Slim\Slim();
// Define the app,
// set the default view engine to Twig,
// configure the default templates dir
/*$app = new \Slim\Slim(array(
    'view' => $twigView,
    'templates.path' => 'templates/',
));
$app->add(new \Slim\Middleware\JwtAuthentication([
    "secret" => "supersecretkeyyoushouldnotcommittogithub",
    "header" => "X-Token",
    "passthrough" => ["/api/token"],
    "algorithm" => ["HS256", "HS384"]
]));
// Set some view options defaults,
// including cache dir
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/templates/cache'
);
*/

$routers = glob('routers/*.route.php');
foreach ($routers as $router) {
    require $router;
}

$app->run();
