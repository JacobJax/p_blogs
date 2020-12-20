<?php
	// connect to the database
	#dev server
	// $conn = mysqli_connect('localhost', 'yoshi', 'esting123', 'p_blog');

	#production server
	$conn = mysqli_connect('remotemysql.com', 'yG0UYUTkhb', 'J3hzbxcoVA', 'yG0UYUTkhb');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
    }
    
?>