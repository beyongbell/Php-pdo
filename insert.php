<?php
require "connect.php";
$fname = "tinnakorn";
$sname = "choompee";
$sql = "INSERT INTO user (fname,sname) value (?,?)";
$stm = $con->prepare($sql);
$stm->bindParam("1",$fname);
$stm->bindParam("2",$sname);

try {
    $stm->execute();
} catch(Exception $e) {
    echo $e-getMessage();
}
