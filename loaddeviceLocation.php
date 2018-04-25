<?php
/**
 * Created by PhpStorm.
 * User: ujiya
 * Date: 4/4/18
 * Time: 7:57 AM
 */
include('db.php');
$id =  $_GET['id'];
$ilist=array();
$q=mysql_query("SELECT * FROM deviceLocation where device_iddevice=".$_GET['id']." order by iddeviceLocation desc limit 1");
if($row = mysql_fetch_array($q)){
    $ilist['lat'] = $row['lat'];
    $ilist['lng'] = $row['lng'];
    $ilist['success'] = 1;
}else{
    $ilist['success'] = 0;
}
echo json_encode($ilist);