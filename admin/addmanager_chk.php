<?php
header("Content-Type:text/html;charset=utf8");
session_start();
require_once "inc/chec.php";
require_once "conn/conn.php";

$names = htmlspecialchars(trim($_POST['names']));

$password = md5(htmlspecialchars(trim($_POST['password'])));

$grade = htmlspecialchars(trim($_POST['grade']));

$realName = htmlspecialchars(trim($_POST['realname']));

$issueDate = date("Y-m-d H-m-i");
$insert_sql = "insert into tb_manager(`name`,`password`,`type`,`realname`,`issueDate`,`whether`) VALUES('$names','$password','$grade','$realName','$issueDate','1')";

$is_success = $conn->execute($insert_sql);

if ($is_success){
    echo "<script type='text/javascript'>top.opener.location.reload();alert('管理员创建成功！');top.window.close();</script>";
    exit();
}else{
    echo "<script type='text/javascript'>alert('管理员创建失败！');window.history.back();</script>";
    exit();
}
?>