<?php
//database connection
// only comment out the code below if you are running the code on development.
// ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost","root","","blog_admin_db"));  //host,user,password,database

//NB: COMMENT THE CODE BELOW IF YOU ARE RUNNING THE CODE LOCALLY AND NOT ON HEROKU
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
($GLOBALS["___mysqli_ston"] =  mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db));  //host,user,password,database
?>
