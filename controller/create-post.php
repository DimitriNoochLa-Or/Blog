<?php
//filler_input prevents hacks
	$title = filter_input(INPUT_POST,"title", FILTER_SANITIZE);//tells that it is what is posted
	$post;