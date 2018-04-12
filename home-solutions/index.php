<?php 

// 3 ways to capture the my-file
// store result in $file_name
// #1 official solutions
// $file_name = pathinfo($file_path, PATHINFO_FILENAME);
// echo $file_name;

// #2 
// extract(pathinfo($file_path));
// $file_name =  "$filename"; 
// echo $file_name;

// #3
// echo basename($file_path, '.txt');

# 4
// $file_name = substr(explode('/', $file_path)[1], 0, -4);
// echo $file_name;

# 5
// $file_path = 'images/my-file.txt';
// $file_name = explode('/', $file_path); 
// $file_name = str_replace('.txt', '', end($file_name));
// $file_name = preg_replace('/\.txt$/i', '', end($file_name));
// echo $file_name;

echo implode(' , ', ['Jeff', 'Collis', 'Tash', 'Amanda']);