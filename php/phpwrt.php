<?php
// include_once "SQL/connectionSQL.php";

$fname_w= "text";
$count_log_w = 3;
$path_w = "../log/$fname_w$count_log_w.txt";
$file_w = basename($path_w);
$writefile = fopen($path_w, "w") or die("Unable to open file!");

// try
// {
//     $sql = "select*from mydb.demotb;";
//     // $sql = "select Userbasicinfo from mydb.demotb where userid = 6";
    
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $stmt->setFetchMode(PDO::FETCH_ASSOC);

//     while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
//         // $data = $row[0]."\n";
//         $data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\t" . $row[3] . "\t" . $row[4] . "\n";
//         echo $data;
//         fwrite($writefile, $data);
//     }

// }

// catch (PDOException $e)
// {
//     echo $e;
// }

fclose($writefile);
// echo "Ok, $file_w";

?>