<?php

include_once "phprd.php";
$permissionUser = $data_r;

if($permissionUser == "HEN")
    $permissionUser = "demotb";
 
// echo $permissionUser;
// $subject = "Open";
$sqltype = $_POST["sqltype"];
// echo $sqltype;


if($sqltype=="Open")
    include "ROOT/openrootV.php";
if($sqltype=="update")
    include "SQL/updateSql.php";
if($sqltype=="insert")
    include "SQL/insertSql.php";
if($sqltype=="delete")
    include "SQL/deleteSql.php";

include "ROOT/openrootV.php";
?>
