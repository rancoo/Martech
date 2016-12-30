<?php 
	define('host','localhost');
	define('db','martech');
	define('username','root');
	define('password','');

	$con=mysql_connect(host,username,password) or die(mysql_error());
	$db=mysql_select_db(db,$con) or die(mysql_error());

?>