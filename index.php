<?php include_once "includes/header.php"; ?>

<body>
	<?php include_once "includes/nav.php"; require "partials/posts.php"; ?>
	<div class="container" id="app">
		
		<ul class="list-unstyled">
					<?php
			if($posts == null){
				echo "<p>No posts yet</p>";
			}else{
				foreach ($posts as $post) {
					echo '<form method="GET" action="singlePost.php" ref="form" id="'.$post->id.'">';
					echo '<li class="mt-2"><a @click="submit('.$post->id.')" href="Javascript:void(0)">'.$post->subject.'</a></li>';
					echo $post->description;
					echo "<br>";
					echo '<input type="hidden" name="post_id" value="'.$post->id.'">';
					echo "</form>";
				}
			}
		?>
		</ul>
	</div>

</body>
<script src="/js/vue.js"></script>
<script src="/js/main.js"></script>

<?php include_once "includes/footer.php"; ?>