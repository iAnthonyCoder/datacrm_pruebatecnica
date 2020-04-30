<?php

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
date_default_timezone_set('CET');

require_once('../../vendor/autoload.php');
use App\Controllers\contactController;
$getContacts = new contactController();
$ContactsList = $getContacts->indexContactsList();






