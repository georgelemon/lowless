<?php
// Current environment of your Lowless Application
// It can be 'local', 'test' or 'production'
define('ENV', 'local');

// Directory Separator shortcut
define('DS', DIRECTORY_SEPARATOR);

// Load the Composer Autoload generated file,
// including Lowless Framework.
require_once __DIR__ . DS . 'vendor/autoload.php';