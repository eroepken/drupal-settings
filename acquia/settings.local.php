<?php

/**
 * Environment-Specific Settings - Comment any of these out to make them configurable through the UI.
 */

// Error Reporting
$conf['dblog_row_limit'] = '1000';
$conf['error_level'] = '2';

// Caching
$conf['block_cache'] = FALSE;
$conf['cache'] = FALSE;
$conf['cache_lifetime'] = '0';
$conf['page_cache_maximum_age'] = '0';
$conf['page_compression'] = FALSE;
$conf['preprocess_css'] = FALSE;
$conf['preprocess_js'] = FALSE;

// Caching - Prepro
$conf['prepro'] = array(
  'additional' => array( 
    'sassy' => array(
      'watchdog' => TRUE,
      'debug' => TRUE,
      'errors' => 'output',
      'style' => 'nested',
    ),
  ),
  'filetypes' => array(
    'sass' => array( 
      'compile_handler' => 'sassy/sassy',
      'cache_handler' => 'prepro/onload',
      'cache_path' => 'public://prepro',
    ),
    'scss' => array( 
      'compile_handler' => 'sassy/sassy',
      'cache_handler' => 'prepro/onload',
      'cache_path' => 'public://prepro',
    ),
  ),
  'show_warnings' => TRUE,
);

// Environment Indicator
// Whether the Environment Indicator should use the settings.php variables for the indicator. On your production environment, you should probably set this to FALSE.
$conf['environment_indicator_overwrite'] = TRUE;
// The text that will be displayed on the indicator.
$conf['environment_indicator_overwritten_name'] = 'Local';
// Valid css colors for the text and background of the admin toolbar and environment indicator.
$conf['environment_indicator_overwritten_color'] = '#000000';
$conf['environment_indicator_overwritten_text_color'] = '#FFFFFF';
// Where your indicator may appear. Allowed values are "top" and "bottom".
$conf['environment_indicator_overwritten_position'] = 'top';
// A boolean value indicating whether the Environment Indicator should be visible at all times, fixed at the top/bottom of the screen.
$conf['environment_indicator_overwritten_fixed'] = FALSE;
