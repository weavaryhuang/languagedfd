<?php
$fname_r = "text";
$count_log_r = 3;
$path_r = "../log/$fname_r$count_log_r.txt";

$file_r = basename($path_r);

$readfile = fopen($path_r, "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($readfile)) {
  $data_r = fgets($readfile);
}
fclose($readfile);

// echo "ok to read, $file_r";
?>