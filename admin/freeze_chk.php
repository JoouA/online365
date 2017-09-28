<?php
header("Content-Type:text/html;charset=utf8");
session_start();
require_once "inc/chec.php";
require_once "conn/conn.php";

$id = htmlspecialchars(trim($_POST['id']));

$whether = (htmlspecialchars(trim($_POST['whether'])) == 1)? 0 : 1;

$chk_sql = "select * from tb_account WHERE `id`='$id'";
$chk_res = $conn->execute($chk_sql);

if (!$chk_res->EOF){
    $update_sql = "update tb_account set `whether`='$whether' WHERE `id`='$id'";
    $is_success = $conn->execute($update_sql);
    /*print_r($is_success);die();*/
    if ($is_success == false){
        echo "<script type='text/javascript'>alert('操作失败');window.history.back();</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('操作成功');window.location='".$_SERVER['HTTP_REFERER']."';</script>";
        exit();
    }

}else{
    echo "<script type='text/javascript'>alert('非法操作');window.history.back();</script>";
    exit();
}

?>
