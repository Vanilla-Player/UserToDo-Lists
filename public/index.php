<?php
// Define the system and application paths
define('BASEPATH', dirname(__DIR__) . '/system/');
define('APPPATH', dirname(__DIR__) . '/application/');

// Set the current directory correctly for CLI requests
if (defined('STDIN')) {
    chdir(dirname(__FILE__));
}

// Load the framework constants
require_once BASEPATH . 'core/CodeIgniter.php';
