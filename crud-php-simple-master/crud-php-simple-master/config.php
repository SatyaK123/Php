<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect($databaseHost,$databaseUserName,$databasePassword) 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'satya-registrationdb.c4qwbh7y8jxy.ap-south-1.rds.amazonaws.com';
$databaseName = 'test';
$databaseUsername = 'admin';
$databasePassword = 'test1234';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
