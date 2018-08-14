<?php
$host="localhost";
$username="root";
$password="";
$db="social_engineering";

mysql_connect($host,$username,$password) or die("error in local host");
mysql_select_db($db) or die("couldnot connect database");

?>