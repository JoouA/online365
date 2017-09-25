<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
include_once "inc/chec.php";
include_once "conn/conn.php";

$action = htmlspecialchars(trim($_GET['action']));
$id = htmlspecialchars(trim($_GET['id']));

if($action == 'audiolist'){
    //sql
    $sql = "delete from tb_audiolist WHERE id=".$id;
}elseif($action == 'videolist'){
    $sql = "delete from tb_videolist WHERE id=".$id;
}

$res = $conn->execute($sql);
if($res == false){
    echo "<script type='text/javascript'>alert('删除目录失败！');window.history.back();</script>";
    exit();
}else{
    echo "<script type='text/javascript'>alert('删除目录成功！');location='".$_SERVER['HTTP_REFERER']."'</script>";
    exit();
}
