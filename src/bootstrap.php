<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  bootstrap.php - Part of the statement project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
define('BASE_DIR', __DIR__ . '/../');
define('STORAGE_DIR', BASE_DIR . 'storage/');

require_once BASE_DIR . 'vendor/autoload.php';

// Load the environment variables from the .env file.
$dotenv = new \Dotenv\Dotenv(BASE_DIR, '.env');
$dotenv->load();

function env(string $key, $default = null) {
    $env = getenv($key, true);
    return $env !== false ? $env : $default;
}

$settings = require_once BASE_DIR . 'src/settings.php';
// Set up the slim app with the settings file as configuration.
$app = new \Slim\App($settings);

// Register dependencies, middlewares and routes.
require_once BASE_DIR . 'src/dependencies.php';
require_once BASE_DIR . 'src/middlewares.php';
require_once BASE_DIR . 'public/routes.php';
