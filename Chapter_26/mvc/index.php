<?php

/*
 * --------------------------------------------------------------------
 * app path
 * --------------------------------------------------------------------
 */

$app_path = dirname(__FILE__);
define('APPPATH', $app_path);
/*
 * --------------------------------------------------------------------
 * core path
 * --------------------------------------------------------------------
 */
$core_folder = 'core';
define('COREPATH', APPPATH . DIRECTORY_SEPARATOR . $core_folder); // COREPPATH = mvc/core (Đường dẫn đến folder core)

/*
 * --------------------------------------------------------------------
 * modules path
 * --------------------------------------------------------------------
 */
$modules_folder = 'modules';
define('MODULESPATH', APPPATH . DIRECTORY_SEPARATOR . $modules_folder); // MODULESPATH = mvc/modules (ĐƯờng dẫn đến modules)


/*
 * --------------------------------------------------------------------
 * helper path
 * --------------------------------------------------------------------
 */

$helper_folder = 'helper';
define('HELPERPATH', APPPATH . DIRECTORY_SEPARATOR . $helper_folder); // HELPERPATH = mvc/helper (Đường dẫn đến helper)


/*
 * --------------------------------------------------------------------
 * library path
 * --------------------------------------------------------------------
 */
$lib_folder = 'libraries';
define('LIBPATH', APPPATH . DIRECTORY_SEPARATOR . $lib_folder); // LIBPATH = mvc/libraries (Đường dẫn đến libraries)


/*
 * --------------------------------------------------------------------
 * layout path
 * --------------------------------------------------------------------
 */
$layout_folder = 'layout';
define('LAYOUTPATH', APPPATH . DIRECTORY_SEPARATOR . $layout_folder); // LAYOUTPATH = mvc/layout (Đường dẫn đén layout)

/*
 * --------------------------------------------------------------------
 * config path
 * --------------------------------------------------------------------
 */
$config_folder = 'config';
define('CONFIGPATH', APPPATH . DIRECTORY_SEPARATOR . $config_folder); // CONFIGPATH = mvc/config (Đường dẫn đến config)

require COREPATH . DIRECTORY_SEPARATOR . 'appload.php'; // Nạp
