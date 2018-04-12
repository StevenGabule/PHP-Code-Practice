<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.container {
		margin: auto;
		width: 60%;
	}
	h1, h2, a{
		text-transform: capitalize;
		text-decoration: none;
	}
	a:hover { color: blue;text-decoration: underline;}
	form ul {padding: 0;}
	form li {list-style: none;font-size: 20px;}
	form input[type='submit'] { display: block;background: linear-gradient(#ccc);text-align: center;padding:10px;}
	form input[type='submit']:hover { background: #000;color: #fff;}
	form input[type='text'] { width: 100%; height: 10px; padding: 16px;font-size: 24px;}
	form input, form textarea { margin-bottom: 1.5em; border-radius: 5px;box-shadow: none;border:1px solid #ccc;}
	form textarea { width: 100%; height: 300px;font-size: 16px;padding: 20px;}
	label {display: block;}

	</style>
</head>
<body>
	<div class="container">	
		<?php include($path); ?>
	</div>
</body>
</html>