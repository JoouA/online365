<?php
header("Content-Type:text/html;charset=utf8");
session_start();
require_once "inc/chec.php";
require_once "conn/conn.php";

$id = htmlspecialchars(trim($_POST['id']));

$whether = (htmlspecialchars(trim($_POST['whether'])) == 1 )? 0 : 1;

$chk_sql = "select *from tb_manager WHERE id='$id'";

$chk_res = $conn->execute($chk_sql);

if(!$chk_res->EOF){
    $free_sql = "update tb_manager set `whether`='$whether' WHERE `id`='$id'";
    $is_success = $conn->execute($free_sql);
    if($is_success){
        echo "<script type='text/javascript'>alert('操作成功！');window.location='".$_SERVER['HTTP_REFERER']."';</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('操作失败！');window.history.back();</script>";
        exit();
    }

}else{
    echo "<script type='text/javascript'>alert('非法失败！');window.history.back();</script>";
    exit();
}
?>