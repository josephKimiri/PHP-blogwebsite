<?php
/*** 
 * // only comment out the code below if you are running the code on development.
$con=mysqli_connect("localhost","root","","blog_admin_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  */

  //NB: COMMENT THE CODE BELOW IF YOU ARE RUNNING THE CODE LOCALLY AND NOT ON HEROKU

  $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
 ?>
