<?php
include "conn/conn.php";
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
header("Content-type:text/html;charset=utf-8");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
fclose($file);
exit;
?>