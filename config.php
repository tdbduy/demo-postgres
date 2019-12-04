<?php

define('DB_SERVER', 'ec2-54-243-238-226.compute-1.amazonaws.com');
define('DB_USERNAME', 'tapjfotjrtuwza');
define('DB_PASSWORD', 'fd0dcdc79a7374c24bc9505ebce5d98578b837c4d50544e0cce40cde5548200c');
define('DB_NAME', 'd99qvrkgd42c86');

/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
