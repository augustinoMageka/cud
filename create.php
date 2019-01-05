<?php include_once "includes/header.php"; ?>

<body>
	<?php include_once "includes/nav.php"; ?>
	<div class="container">
		<h4 class="mt-3 text-primary">Create A Post</h4>
		<form method="POST" action="partials/createPost.inc.php">
			<label class="lead">Subject</label>
			<div class="form-group">
				<input type="text" name="subject" placeholder="Subject" class="form-control">
			</div>
			<label class="lead">Description</label>
			<div class="form-group">
				<textarea type="text" name="description" placeholder="Description" class="form-control"></textarea>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Add Post</button>
		</form>
	</div>
</body>
<script src="/js/vue.js"></script>
<script src="/js/main.js"></script>

<?php include_once "includes/footer.php"; ?>