<?php
session_start();

ini_set('display_errors', 'On');

error_reporting(E_ALL);

//database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'demo';
date_default_timezone_set("Asia/Kolkata");

require_once 'common.php';
// Start a Session, You might start this somewhere else already.


// What languages do we support
$available_langs = array('en','fr','de');

if(isset($_GET['lang']) && $_GET['lang'] != ''){
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs))
    {
        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}

// Set our default language session ONLY if we've got nothing
if (empty($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}
// Include active language
include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
/*
* End of file config.php
*/