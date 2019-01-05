<?php 
require "partials/singlePost.inc.php";

include_once "includes/header.php";

include_once "includes/nav.php";
?>

<body>
	<div class="container">
		<?php
			echo $post->subject.'<br>';
			echo $post->description;
			echo'<form class="form-inline mt-3" method="POST" action="partials/deletePost.php">
				<button class="btn btn-danger">Delete</button>
				<input type="hidden" name="post_id" value="'.$post->id.'">
			</form>';
			echo'<form class="form-inline mt-3" method="POST" action="partials/updatePost.php">
				<input type="text" name="post_subject" value="'.$post->subject.'" class="form-control mr-2">
				<input type="text" name="post_description" value="'.$post->description.'" class="form-control mr-2">
				<button class="btn btn-danger">Edit</button>
				<input type="hidden" name="post_id" value="'.$post->id.'">
			</form>';
		?>
	</div>
</body>
<?php
include_once "includes/footer.php";
?>