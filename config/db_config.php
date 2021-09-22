<?php
	// connect to the database
	#dev server
	// $conn = mysqli_connect('localhost', 'yoshi', 'esting123', 'p_blog');

	#production server
	$db_host = getenv('DB_HOST');
    $db_port = getenv('DB_PORT');
    $db_name = getenv('DB_NAME');
    $db_user = getenv('DB_USER');
    $db_pwd = getenv('DB_PWD');

	$conn = mysqli_connect("$db_host", "$db_user", "$db_pwd", "$db_name");

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
    }
    
?>