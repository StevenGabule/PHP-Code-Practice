<h1>Create a new post</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="title">Title</label>
			<input type="text" name="title">
		</li>
		<li>
			<label for="body">Body:</label>
			<textarea name="body" id="body"></textarea>
		</li>
		<li>
			<input type="submit" value="Create A Post">
		</li>
	</ul>
</form>
	<?php if(isset($status)) : ?>
		<p><?php echo $status; ?></p>
	<?php endif; ?>