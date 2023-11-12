<?php

/** defaut system time zone */
date_default_timezone_set("Africa/Nairobi");
/** page roots */
define("ROOT", $ROOT);
defined("LIB_PATH") ? null : define("LIB_PATH", SITE_ROOT . DS);
/** Main system data */
define("APPINFO", $app->appInfo());
