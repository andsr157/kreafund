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
    
    // Load .env file
    $dotenv = Dotenv\Dotenv::createImmutable(FCPATH);
    $dotenv->load();
}
