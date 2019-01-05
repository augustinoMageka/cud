<?php
require "Post.php"; 
require "core/DbConn.php";

$posts = new Post($conn);
$posts = $posts->readAll();
