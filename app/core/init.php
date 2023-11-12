<?php

spl_autoload_register(function ($classname) {
    $pagesFilename = "../app/models/" . ucfirst($classname) . ".php";
    $portalsFilename = "../app/models/portals/" . ucfirst($classname) . ".php";
    if (file_exists($pagesFilename)) {
        $filename = $pagesFilename;
    } else {
        $filename = $portalsFilename;
    }

    require $filename;
});

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';
require 'Main.php';
