<?php
/**
 * Copyright (c) UNA, Inc - https://mvive.com
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    Malayalam
 * @ingroup     UnaModules
 *
 * @{
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'type' => BX_DOL_MODULE_TYPE_LANGUAGE,
    'name' => 'mvive_ml',
    'title' => 'Malayalam',
    'note' => 'Language file',
    'version' => '0.0.2',
    'vendor' => 'Mvive',
    'help_url' => 'http://mvive.com/',

    'compatible_with' => array(
        '13.1.0-RC3'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'mvive/malayalam/',
    'home_uri' => 'ml',

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
        'execute_sql' => 1,
        'update_languages' => 1,
        'install_language' => 1,
    	'clear_db_cache' => 1
    ),
    'uninstall' => array (
        'update_languages' => 1,
        'execute_sql' => 1,
    	'clear_db_cache' => 1
    ),
    'enable' => array(
        'execute_sql' => 1
    ),
    'disable' => array(
        'execute_sql' => 1
    ),

    /**
     * Dependencies Section
     */
    'dependencies' => array(),

);

/** @} */
