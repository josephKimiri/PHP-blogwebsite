<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$dsn='mysql:host=' + $cleardb_server + ';dbname=' + $cleardb_db;//dbname and host
$username=$cleardb_username;//username
$password=$cleardb_password;//password

/**
 * $dsn='mysql:host=localhost;dbname=blog_admin_db';//dbname and host
 * $username='root';//username
 * $password='';//password
 */
?>