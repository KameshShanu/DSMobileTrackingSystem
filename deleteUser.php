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
    $save= mysql_query("DELETE FROM `gpstracker`.`user` WHERE `user`.`iduser` = $id");
    // $r="done";

    header("Location: viewUser.php");
}
?>