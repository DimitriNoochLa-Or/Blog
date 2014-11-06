<?php
//filler_input prevents hacks
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);//sanitizing it to make sure its a string 
	//tells that it is what is posted
	$post= filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title </p>";
	echo "<p>Post: $post </p>"