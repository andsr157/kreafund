<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

// Hook to load .env file
$hook['pre_system'] = array(
    'class'    => '',
    'function' => 'load_dotenv',
    'filename' => '',
    'filepath' => ''
);

function load_dotenv() {
    // Load Composer autoloader
    require_once FCPATH . 'vendor/autoload.php';
    
    // Check if .env file exists (for local development)
    $envFile = FCPATH . '.env';
    if (file_exists($envFile)) {
        // Load .env file for local development
        $dotenv = Dotenv\Dotenv::createImmutable(FCPATH);
        $dotenv->load();
    }
    // If no .env file exists (production/Docker), environment variables 
    // from Docker Compose will be used automatically via $_ENV and getenv()
}
