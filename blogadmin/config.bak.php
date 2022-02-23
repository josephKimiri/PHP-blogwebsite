<?php
// COMMENT THIS CODE FROM LINE 5-14
// WHEN THE APPLICATION IS RUNNING ON DEVELOPMENT AND 
// UNCOMMENT IT WHEN RUNNING ON PRODUCTION
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$dbServer = $cleardb_server;
$dbUsername = $cleardb_username;
$dbPassword = $cleardb_password;
$dbDatabase = $cleardb_db;

/** !!!Uncomment this while using localhost
	* $dbServer = 'localhost';
	* $dbUsername = 'root';
	* $dbPassword = '';
	* $dbDatabase = 'blog_admin_db';*/

	$adminConfig = array(
		'adminUsername' => "admin",
		'adminPassword' => "21232f297a57a5a743894a0e4a801fc3",
		'notifyAdminNewMembers' => "",
		'defaultSignUp' => "1",
		'anonymousGroup' => "anonymous",
		'anonymousMember' => "guest",
		'groupsPerPage' => "10",
		'membersPerPage' => "10",
		'recordsPerPage' => "10",
		'custom1' => "Full Name",
		'custom2' => "Address",
		'custom3' => "City",
		'custom4' => "State",
		'MySQLDateFormat' => "%m/%d/%Y",
		'PHPDateFormat' => "n/j/Y",
		'PHPDateTimeFormat' => "m/d/Y, h:i a",
		'senderName' => "Membership management",
		'senderEmail' => "josephmanash@gmail.com",
		'approvalSubject' => "Your membership is now approved",
		'approvalMessage' => "Dear member,\n\nYour membership is now approved by the admin. You can log in to your account here:\nhttp://localhost/blogadmin\n\nRegards,\nAdmin",
		'hide_twitter_feed' => "",
		'maintenance_mode_message' => "<b>Our website is currently down for maintenance</b><br>\r\nWe expect to be back in a couple hours. Thanks for your patience.",
		'mail_function' => "mail",
		'smtp_server' => "",
		'smtp_encryption' => "",
		'smtp_port' => "25",
		'smtp_user' => "",
		'smtp_pass' => ""
	);