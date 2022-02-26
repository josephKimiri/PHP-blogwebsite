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

function debug_to_console($cleardb_server) {
    $output = $cleardb_server;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
debug_to_console("Test");
	$database_username = $cleardb_username;
	$database_password = $cleardb_password;
	$pdo_conn = new PDO( 'mysql:host=' + $cleardb_server + ';dbname=' + $cleardb_db);
	
?>
