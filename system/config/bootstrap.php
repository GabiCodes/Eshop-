<?php

define('SYSTEM_DIR', DOCROOT.'/system');
// cache - for cached files, generated by the script itself
define('CACHE_DIR', SYSTEM_DIR.'/cache');
// config - for our project configuration
define('CONFIG_DIR', SYSTEM_DIR.'/config');
// controllers - for our page controllers
define('CONTROLLERS_DIR', SYSTEM_DIR.'/controllers');
// libraries - for all globally usable classes
define('LIBRARIES_DIR', SYSTEM_DIR.'/libraries');
// models - for classes that handle the database communication
define('MODELS_DIR', SYSTEM_DIR.'/models');
// vendor - for libraries included from 3rd party vendors
define('VENDOR_DIR', SYSTEM_DIR.'/vendor');
// views - for our templates
define('VIEWS_DIR', SYSTEM_DIR.'/views');

// config
require_once(LIBRARIES_DIR.'/config.class.php');
// db
require_once(LIBRARIES_DIR.'/db.class.php');
// presenter
require_once(LIBRARIES_DIR.'/presenter.class.php');
// request
require_once(LIBRARIES_DIR.'/request.class.php');
// router
require_once(LIBRARIES_DIR.'/router.class.php');
// view
require_once(LIBRARIES_DIR.'/view.class.php');

// vendor autoload
require_once(VENDOR_DIR.'/autoload.php');

// load the configuration of our project
config::load();

