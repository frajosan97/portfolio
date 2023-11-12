<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DBNAME', 'portfolio'); // localhost host database name
    define('DBHOST', 'localhost'); // localhost host host name
    define('DBUSER', 'root'); // localhost host user name
    define('DBPASS', ''); // localhost host password name
    define('DBDRIVER', '');
    /** get document root for localhost */
    $THIS_FILE = str_replace('\\', '/', __File__);
    $DOC_ROOT = $_SERVER['DOCUMENT_ROOT'];
    $ROOT =  str_replace(array($DOC_ROOT, "app/core/config.php"), '', $THIS_FILE);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', $DOC_ROOT . DS . $ROOT);
    define("DEBUG", true);
} else {
    define('DBNAME', ''); // real server host database name
    define('DBHOST', ''); // real server host host name
    define('DBUSER', ''); // real server host user name
    define('DBPASS', ''); // real server host password name
    define('DBDRIVER', '');
    /** get document root for online server */
    $ROOT = str_replace($_SERVER['SCRIPT_URL'], '/', $_SERVER['SCRIPT_URI']);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . '/');
    define("DEBUG", false);
}
