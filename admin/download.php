<?php
session_start();
require_once "inc/chec.php";
require_once "conn/conn.php";

$action = htmlspecialchars(trim($_GET['action']));
$id = htmlspecialchars(trim($_GET['id']));

if($action == "audio"){
    $down_sql = "select address from tb_audio WHERE `id`='$id'";

    $che_res = $conn->execute($down_sql);

    if(!$che_res->EOF){
        $address = "../".$che_res->fields['address'];
    }else{
        echo "<script type='text/javascript'>alert('文件不存在');window.history.back();</script>";
        exit();
    }

}elseif($action == "video"){
    $down_sql = "select address from tb_video WHERE `id`='$id'";
    $che_res = $conn->execute($down_sql);

    if(!$che_res->EOF){
        $address = "../".$che_res->fields['address'];
    }else{
        echo "<script type='text/javascript'>alert('文件不存在');window.history.back();</script>";
        exit();
    }
}

if(file_exists($address)==false)
{
    echo "<script>alert('文件不存在！');history.back();</script>";
    exit;
}

$filename = substr(strrchr($address,'/'),1);
$ext = substr(strrchr($address,'.'),1);
$short_name = strstr($filename,'.',true);

$file = fopen($address,'r');
header("Content-Type:text/html;charset=utf-8");
header("Content-Type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($address));
header("Content-Disposition:attachment;filename=".md5($short_name).'.'.$ext);
echo fread($file,filesize($address));
fclose($file);
exit();
?>
