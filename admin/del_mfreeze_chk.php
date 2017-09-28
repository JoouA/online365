<?php
header('Content-Type:text/html;charset=utf8');
session_start();
require_once "inc/chec.php";
require_once "conn/conn.php";

$id = htmlspecialchars(trim($_GET['id']));

$chk_sql = "select * from tb_manager WHERE `id`='$id'";

$chk_res = $conn->execute($chk_sql);

if(!$chk_res->EOF){
    $del_sql = "delete from tb_manager WHERE `id`='$id'";

    $is_success = $conn->execute($del_sql);

    if($is_success){
        echo "<script type='text/javascript'>alert('操作成功');window.location='".$_SERVER['HTTP_REFERER']."';</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('操作失败！');window.history.back();</script>";
        exit();
    }
}else{
    echo "<script type='text/javascript'>alert('非法操作');window.history.back();</script>";
    exit();
}