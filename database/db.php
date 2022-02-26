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

function console_log($cleardb_server, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($cleardb_server, JSON_HEX_TAG) .');';
}
	$database_username = $cleardb_username;
	$database_password = $cleardb_password;
	$pdo_conn = new PDO( 'mysql:host=' + $cleardb_server + ';dbname=' + $cleardb_db);
	
?>
