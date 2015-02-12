<?php

$db = mysql_connect("localhost","root","root");

if (!$db) {
	die("Could not connect to database.".mysql_error());
}

mysql_select_db('talkbox', $db);

