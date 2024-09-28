<?php
/**
 * Copyright (c) Mvive Inc - https://mvive.com
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    Malayalam
 * @ingroup     UnaModules
 *
 * @{
 *
 * Refer https://unacms.com/wiki/Creating-app-auto-update-script
*/

$aConfig = array(
  'title' => 'Malayalam',
  'version_from' => '0.0.1',
  'version_to' => '0.0.2',
  'vendor' => 'Mvive',

  'module_dir' => 'mvive/malayalam/',
  'module_uri' => 'malayalam',

  'compatible_with' => array(
    '13.1.0-RC3'
),

/**
 * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
 */
'home_dir' => 'mvive/malayalam/updates/update_0.0.1_0.0.2/',
'home_uri' => 'accounts_update_001_002',


'module_dir' => 'mvive/malayalam/',
'module_uri' => 'malayalam',

'db_prefix' => 'mvive_ml_',
'class_prefix' => 'MviveMl',

/**
 * Category for language keys.
 */
'language_category' => 'Malayalam',

/**
 * Installation/Uninstallation Section.
 * NOTE. The sequence of actions is critical. Don't change the order.
 */
  'install' => array(
      'execute_sql' => 0,
      'update_files' => 1,      
      'update_languages' => 1,
      'restore_languages' => 0,
      'clear_db_cache' => 0
  ),

  /**
   * Category for language keys.
   */
  'language_category' => 'System',
  
  /**
   * Dependencies Section
   */
  'dependencies' => array(),  
);