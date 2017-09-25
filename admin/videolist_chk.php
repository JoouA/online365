<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
include_once "inc/chec.php";
include_once "conn/conn.php";
/*echo "<pre>";
print_r($_POST);
die();*/
$name = htmlspecialchars(trim($_POST['names']));
$grade = $_POST['grade'];
$userName = $_SESSION['admin'];
$date = date("Y-m-d H:m:s");
if($grade == 1){
    // 插入一级目录
    $sql = "insert into tb_videolist(`grade`,`name`,`userName`,`issueDate`) VALUES('$grade','$name','$userName','$date')";
}else{
    // 插入二级目录
    $father = htmlspecialchars(trim($_POST['father']));
    $sql = "insert into tb_videolist(`grade`,`name`,`father`,`userName`,`issueDate`) VALUES('$grade','$name','$father','$userName','$date')";
}

$res = $conn->execute($sql);
if($res==false){
    echo "<script type='text/javascript'>alert('目录创建失败！'); window.history.back();</script>";
    exit();
}else{
    echo "<script type='text/javascript'>top.opener.location.reload();alert('目录创建成功！'); window.close();</script>";
    exit();
}
?>