<?php
require "Post.php"; 
require "core/DbConn.php";

$sub = $_POST['subject'];
$des = $_POST['description'];

if(!isset($_POST['submit'])){
	header("Location: create.php");
}else{
	$post = new Post($conn);
	$post->createPost($sub, $des);
	header("Location: ../index.php?postcreated=success");
	exit();
}