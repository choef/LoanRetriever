<?php

require_once("MDB2.php");
require_once("/home/cs304/public_html/php/MDB2-functions.php");
require_once("choef_dsn.inc");
require_once("methods.php");
require_once("cron.php");
require_once("test.php");

//connects to database
$dbh = db_connect($choef_dsn);


echo checkDueDates($dbh);
