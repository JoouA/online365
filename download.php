<?php
header("Content-type:text/html;charset=utf-8");
session_start();
require_once "inc/chec.php";
include "conn/conn.php";
if (@$_SESSION['grade'] != '高级会员' ){
    echo "<script type='text/javascript'>alert('非法操作!');window.close();</script>";
    exit();
}


$address = $_GET['id'];
if($_GET['action'] == "audio"){
    $a_sql = "select address,downTime from tb_audio where id='".$address."'";
    $a_rst = $conn->execute($a_sql);
    if(!$a_rst->EOF){
        $downtime = array();
        $downtime["downTime"] = $a_rst->fields['downTime'] + 1;
        $updata = $conn->getupdateSql($a_rst,$downtime);
//        echo $updata;
        $conn->execute($updata);
        $path = $a_rst->fields['address'];
    }
}elseif($_GET['action'] == "video"){
    $a_sql = "select address,downTime from tb_video where id = '".$address."'";
    $a_rst = $conn->execute($a_sql);
    if(!$a_rst->EOF){
        $downtime = array();
        $downtime["downTime"] = $a_rst->fields['downTime'] + 1;
        $updata = $conn->getupdateSql($a_rst,$downtime);
//        echo $updata;
        $conn->execute($updata);
        $path = $a_rst->fields['address'];
//        echo $path; die();
    }
}

if(file_exists($path)==false)
{
    echo "<script>alert('文件不存在！');history.back();</script>";
    exit;
}
$filename=basename($path);
$file=fopen($path,"r");
$ext =  strrchr($filename,'.');

header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".md5($filename).$ext);
echo fread($file,filesize($path));
fclose($file);
exit;
?>