<?php
include('db.php');
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    die();
}

$r="";
if($_GET["id"]){
    $id= $_GET["id"];
    $save= mysql_query("DELETE FROM `gpstracker`.`device` WHERE `device`.`iddevice` = $id");
    // $r="done";

    header("Location: viewDevice.php");
}
?>