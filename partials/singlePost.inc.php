<?php
require "core/DbConn.php";
require "Post.php";

$id = $_GET['post_id'];

$post = new Post($conn);
$post = $post->readSingle($id);