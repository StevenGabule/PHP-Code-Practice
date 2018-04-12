<?php
// this function learning here
// basename
// dirname
// pathinfo
// substr
// extract  
$images = glob('img/*.{png,jpg,jpeg}', GLOB_BRACE);
foreach($images as $img) {

	// echo "<img src=\"$img\" style='width:100px;height:100px;'>";
	// echo basename($img);
	// echo substr($img, 0);
	// print_r(pathinfo($img));
	// $info = pathinfo($img);
	// echo $info['filename'];
	// extract(pathinfo($img));
	// echo $filename;
	// echo pathinfo($img, PATHINFO_EXTENSION);
	// $info = pathinfo($img);

	// $thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
	
	extract(pathinfo($img));
	$thumb_name = "thumb-{$filename}.{$extension}";
	echo $thumb_name . "\n"; 
	// echo "<br>";
}
?>