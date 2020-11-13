<?php
    // connect to the database
	$conn = mysqli_connect('localhost', 'yoshi', 'esting123', 'p_blog');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
    }
    
?>