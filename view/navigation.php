<?php
	require_once(__DIR__ . "/../model/config.php");
	//goes to the file config 
?>
<nav>
	<ul>
		<li>
		<!--  inserted php into href it echos to the variable path and concatinates it with a string to post.php -->
		 <a href="<?php echo $path . "post.php"?>">Blog post forum</a>
		 <!-- makes a link for blog post  -->
		</li>
	</ul>
</nav>