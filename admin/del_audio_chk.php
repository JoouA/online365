<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
require_once "inc/chec.php";
require_once "conn/conn.php";
$id = htmlspecialchars(trim($_GET['id']));
$info_sql = "select * from tb_audio WHERE id=$id";
$audio_data = $conn->execute($info_sql);


if (!$audio_data->EOF){
    $picture = $audio_data->fields['picture'];
    $address = $audio_data->fields['address'];
    @unlink("../".$picture);
    @unlink("../".$address);

    $del_sql = "delete from tb_audio WHERE id=$id";

    $is_success = $conn->execute($del_sql);

    if ($is_success == true){
        echo "<script type='text/javascript'>alert('删除成功！');window.close();location='".$_SERVER['HTTP_REFERER']."'</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('删除失败！');window.history.back();</script>";
        exit();
    }
}else{
    echo "<script type='text/javascript'>alert('非法操作！');window.history.back();</script>";
    exit();
}



