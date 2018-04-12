<?php 
require 'file.php';
FILE::truncate('sample.txt');
// FILE::append('sample.txt', 'Append data');
// FILE::put('sample.txt', 'new Here some new data more data' . PHP_EOL, true);
// echo FILE::delete('sample.txt');