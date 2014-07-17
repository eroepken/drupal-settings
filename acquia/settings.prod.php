<?php

/**
 * Environment-Specific Settings - Comment any of these out to make them configurable through the UI.
 */

// Error Reporting
$conf['dblog_row_limit'] = '100';
$conf['error_level'] = '0';

// Caching
$conf['block_cache'] = TRUE;
$conf['cache'] = TRUE;
$conf['cache_lifetime'] = '86400';
$conf['page_cache_maximum_age'] = '86400';
$conf['page_compression'] = TRUE;
$conf['preprocess_css'] = TRUE;
$conf['preprocess_js'] = TRUE;

// Caching - Prepro
$conf['prepro'] = array(
  'additional' => array( 
    'sassy' => array(
      'watchdog' => TRUE,
      'debug' => FALSE,
      'errors' => 'watchdog',
      'style' => 'compressed',
    ),
  ),
  'filetypes' => array(
    'sass' => array( 
      'compile_handler' => 'sassy/sassy',
      'cache_handler' => 'prepro/cache',
      'cache_path' => 'public://prepro',
    ),
    'scss' => array( 
      'compile_handler' => 'sassy/sassy',
      'cache_handler' => 'prepro/cache',
      'cache_path' => 'public://prepro',
    ),
  ),
  'show_warnings' => FALSE,
);

// Environment Indicator
// Whether the Environment Indicator should use the settings.php variables for the indicator. On your production environment, you should probably set this to FALSE.
$conf['environment_indicator_overwrite'] = TRUE;
// The text that will be displayed on the indicator.
$conf['environment_indicator_overwritten_name'] = 'Prod';
// Valid css colors for the text and background of the admin toolbar and environment indicator.
$conf['environment_indicator_overwritten_color'] = '#008000';
$conf['environment_indicator_overwritten_text_color'] = '#FFFFFF';
// Where your indicator may appear. Allowed values are "top" and "bottom".
$conf['environment_indicator_overwritten_position'] = 'top';
// A boolean value indicating whether the Environment Indicator should be visible at all times, fixed at the top/bottom of the screen.
$conf['environment_indicator_overwritten_fixed'] = FALSE;
