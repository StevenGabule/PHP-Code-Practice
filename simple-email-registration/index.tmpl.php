 <!DOCTYPE html>
 <html>
 <head>
 	<title>Simple Email Registration</title>
 	<style>
	li { list-style: none;margin-bottom: 5px;}
	.notice { color: red;font-style: italic;}
 	</style>
 </head>
 <body>
 <h1>Join the mailing list</h1>
 <form action="" method="post">
 	<?php if(isset($status)) : ?>
 		 <p class="notice"><?php echo $status; ?></p>
 	<?php endif; ?>
 	<ul>
 		<li>
 			<label for="name">Name:</label>
 			<input type="text" name="name" id="name" value="<?php echo old('name'); ?>">
 		</li>
 		<li>
 			<label for="email">Your email address:</label>
 			<input type="text" name="email" id="email" value="<?php echo old('email'); ?>">
 		</li>
 		<li>
 			<input type="submit" value="Sign up!">
 		</li>
 	</ul>
 </form>
 </body>
 </html>