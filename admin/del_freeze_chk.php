<?php
header("Content-Type:text/html;charset=utf8");
session_start();
require_once "inc/chec.php";
require_once "conn/conn.php";

$id = htmlspecialchars(trim($_GET['id']));
$chk_sql = "select * from tb_account WHERE `id`='$id'";
if (!$conn->execute($chk_sql)->EOF){
    $del_sql = "delete from tb_account WHERE `id`='$id'";

    $is_success = $conn->execute($del_sql);

    if ($is_success){
        echo "<script type='text/javascript'>alert('删除成功！');window.location='".$_SERVER['HTTP_REFERER']."'</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('非法操作');window.history.back();</script>";
        exit();
    }
}else{
    echo "<script type='text/javascript'>alert('非法操作');window.history.back();</script>";
    exit();
}