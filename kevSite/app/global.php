<?php

// Include Path
set_include_path(dirname(__FILE__));

// Include the Config file
include_once 'config.php';

session_start();

// Connect to Database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DBNAME)
  or die ('Error: '.$conn->connect_error);
$conn->set_charset("utf8");

// Class Autoloader
spl_autoload_register(function($class_name) {
  include SYSTEM_PATH.'/model/classes/'.$class_name.'.php';
});
