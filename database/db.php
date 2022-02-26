<?php
	/***$database_username = 'root';//user name
	$database_password = '';//password
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=blog_admin_db', $database_username, $database_password );
*/

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

	$database_username = $cleardb_username;
	$database_password = $cleardb_password;
	$pdo_conn = new PDO( "mysql:host= {$cleardb_server};dbname= {$cleardb_db}");
?>
