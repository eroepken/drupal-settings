<?php

/**
* Override default settings.php with settings.[environment].php.
*
* Get the http host and then start removing pieces to eventually end up with
* an environment identifier. The default environment is 'production'.
*
* Examples:
*   mysite.com = production
*   www.mysite.com = production
*   stage.mysite.com = stage
*   local.mysite.com = local
*   local.mysite = local
*/

// Grab the domain and remove the 'www.' prefix.
$host = $_SERVER['HTTP_HOST'];
$host = str_replace('www.', '', $host);

// Load the settings file depending on which domain is being accessed
switch ($host) {
  case 'yoursite.local':
    $subfile = 'local';
    break;

  case 'dev.yoursite.com':
    $subfile = 'dev';
    break;

  case 'test.yoursite.com':
    $subfile = 'test';
    break;

  default:
    $subfile = 'prod';
    break;
}

// Prefix configuration variables with 'pre_' to avoid any clashes.
$conf['pre_settings_file'] = '/settings.' . $subfile . '.php';

// Check if the file exists prior to including it.
if (file_exists(dirname(__FILE__) . $conf['pre_settings_file'])) {
  include dirname(__FILE__) . $conf['pre_settings_file'];
}
