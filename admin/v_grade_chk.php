<?php
session_start();
header("Content-Type:text/html;charset=utf8");
require_once "inc/chec.php";
require_once "conn/conn.php";
$price = htmlspecialchars(trim($_POST['price']));

$id = htmlspecialchars(trim($_POST['name']));

if (!is_numeric($price) || !is_numeric($id) || $price<=0 ){
    echo "<script type='text/javascript'>alert('非法操作！');window.history.back();</script>";
    exit();
}else{
    $update_sql = "update tb_grade set `price`='$price' WHERE `id`='$id'";
    $is_success =  $conn->execute($update_sql);
    if ($is_success){
        echo "<script type='text/javascript'>top.opener.location.reload();alert('更新成功！');window.close();</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('更新失败！');window.history.back();</script>";
        exit();
    }
}
?>