<?php
	include('users.php');
	include('posts.php');

	$db = new PDO('mysql:dbname=blog;host=localhost', 'root', 'secret');
	$usersRepo = new UsersRepo($db);
	$postsRepo = new PostsRepo($db);
?>
