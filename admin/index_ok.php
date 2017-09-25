<?php
header("Content-type:text/html;charset=utf8");
session_start();
//print_r($_POST);die();
include_once "conn/conn.php";
$manager = htmlspecialchars(trim( $_POST['manager']));
$password =  md5(htmlspecialchars(trim($_POST['pwd'])));
if (empty($manager)){
    echo "<script type='text/javascript'>alert('登录失败，请输入用户名！');window.history.back();</script>";
    exit();
}

if (empty($password)){
    echo "<script type='text/javascript'>alert('登录失败，请输入密码！');window.history.back();</script>";
    exit();
}

$sql = "select * from tb_manager WHERE `name`='$manager' AND  `password`='$password'";

$q_rst = $conn->execute($sql);

if (!$q_rst->EOF){
    if ($q_rst->fields['whether'] == "0"){
        echo "<script type='text/javascript'>alert('您所登录的用户被冻结，如果有疑问请拨打电话0431-1234****咨询详细信息！');</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('登录成功！');</script>";
        $_SESSION['admin'] = $q_rst->fields['name'];
        $_SESSION['m_id'] = $q_rst->fields['id'];
        $_SESSION['m_type'] = $q_rst->fields['type'];

        header("Location: main.php");
    }
}else{
    echo "<script type='text/javascript'>alert('用户名或者密码错误，登录失败！！');window.history.back();</script>";
    exit();
}


