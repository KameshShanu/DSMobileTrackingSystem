<?php
/**
 * Created by PhpStorm.
 * User: ujiya
 * Date: 2/7/18
 * Time: 10:00 AM
 */

include('../db.php');
$data = $_POST['data'];
$arr = json_decode($data);

// echo $arr;
$organization =  $arr->organization;
$ulist = $arr->users;

$ilist=array();

foreach ($ulist as $r){
    $o=array();

    $user= 0;
    $q=mysql_query("SELECT * FROM device where ime = '".$organization."' ");
    if($row = mysql_fetch_array($q)){
        $user = $row['iddevice'];
    }
    mysql_query("insert into deviceLocation values(0,'".$r->lat."','".$r->lng."','".$r->date."','".$r->time."','".$user."')");
    $o['id'] = $r->id;
    array_push($ilist,$o);
}

$res =array();
$res['status']=1;
$res['values']=$ilist;
echo json_encode($res);