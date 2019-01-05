<?php
require "core/DbConn.php";
require "Post.php";

$id = $_POST['post_id'];
$post = new Post($conn);
$post->delete($id);
header("Location: ../index.php");