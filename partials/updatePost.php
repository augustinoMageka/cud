<?php
require "core/DbConn.php";
require "Post.php";

$id = $_POST['post_id'];
$post = new Post($conn);
$subject = $_POST['post_subject'];
$description = $_POST['post_description'];

$post->update($id, $subject, $description);
header("Location: ../index.php");