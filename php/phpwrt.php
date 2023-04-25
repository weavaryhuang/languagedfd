<?php
$fname_w= "text";
$count_log_w = 3;
$path_w = "log/$fname_w$count_log_w.txt";
  
$file_w = basename($path_w);

$writefile = fopen($path_w, "w") or die("Unable to open file!");
$content = "This is\n";
fwrite($writefile, $content);
$content = "a file\n";
fwrite($writefile, $content);
fclose($writefile);

echo "Ok, $file_w";
?>