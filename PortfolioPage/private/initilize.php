<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_ROOT", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_ROOT . '/public');
    define("TEMPLATE_PATH", PRIVATE_PATH . '/templates');
    
    require_once PRIVATE_PATH . '/properties.inc.php';
    require_once PRIVATE_PATH . '/functions.inc.php';
session_start();