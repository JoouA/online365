<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
require_once "inc/chec.php";
require_once "conn/conn.php";
$id = htmlspecialchars(trim($_GET['id']));

$data_sql = "select * from tb_video WHERE id=$id";
$data = $conn->execute($data_sql);
if (!$data->EOF){
    $picture = $data->fields['picture'];
    $address = $data->fields['address'];
    @unlink("../".$picture);
    @unlink("../".$address);

    $del_sql = "delete from tb_video WHERE id=$id";

    $is_success = $conn->execute($del_sql);
    if ($is_success == false){
        echo "<script type='text/javascript'>alert('删除失败！');window.history.back();</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('删除成功！');window.location='".$_SERVER['HTTP_REFERER']."';</script>";
        exit();
    }

}else{
    echo "<script type='text/javascript'>alert('非法操作');window.history.back();</script>";
    exit();
}