<?php

### EDIT HERE ###

// DB CONNECT INFO

/***
 * !!!Uncomment this while using localhost
$db_host = "localhost";
$db_name = "blog_admin_db";
$db_user = "root";
$db_pw = "";

*/
// COMMENT THIS CODE FROM LINE 17-26 
// WHEN THE APPLICATION IS RUNNING ON DEVELOPMENT AND 
// UNCOMMENT IT WHEN RUNNING ON PRODUCTION

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$db_host = $cleardb_server;
$db_name = $cleardb_db;
$db_user = $cleardb_username;
$db_pw = $cleardb_password;

// DB TABLE INFO
$GLOBALS['hits_table_name'] = "page_hits";
$GLOBALS['info_table_name'] = "visitor_info";

### STOP EDITING HERE ###

// CONNECT TO DB
try {
	$GLOBALS['db'] = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pw, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>
