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

// Grab Pantheon's environment variable. Can be either 'dev', 'test' or 'live'.
if (defined('PANTHEON_ENVIRONMENT')) {
  $subfile = PANTHEON_ENVIRONMENT;
} else {
  // Otherwise, use the local file.
  $subfile = 'local';
}

// Prefix configuration variables with 'pre_' to avoid any clashes.
$conf['pre_settings_file'] = '/settings.' . $subfile . '.php';

// Check if the file exists prior to including it.
if (file_exists(dirname(__FILE__) . $conf['pre_settings_file'])) {
  include dirname(__FILE__) . $conf['pre_settings_file'];
}