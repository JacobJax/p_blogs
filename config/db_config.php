<?php
	// connect to the database
	#dev server
	// $conn = mysqli_connect('localhost', 'yoshi', 'esting123', 'p_blog');

	#production server
	$conn = mysqli_connect('b5yo3n25dtjsk7zprnt6-mysql.services.clever-cloud.com', 'ulou9hu6zhfdgc7s', 'A4md4Oys3WEOc5hRoaMo', 'b5yo3n25dtjsk7zprnt6');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
    }
    
?>