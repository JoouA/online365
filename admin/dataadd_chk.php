<?php
header("Content-Type:text/html;charset=utf-8");
require_once "conn/conn.php";
require_once "inc/func.php";
$picExt = array('jpg','png','bmp');
$audExt = array('mp4','mkv','rmvb','avi','3gp');


function removeCharacters($data){
    return htmlspecialchars(trim($data));
}

function showMessage($message){
    echo "<script type='text/javascript'>alert('$message');</script>";
    exit();
}

if ($_FILES['picture']['error'] > 0 || $_FILES['address']['error'] > 0){
    showMessage("文件上传出错");
}

// 线判断文件的大小
if ($_FILES['picture']['size'] > 700000){
    showMessage("图片文件大于700k，失败！");
}

if ($_FILES['address']['size'] > 500000){
    showMessage('视频文件大于500M上传失败！');
}

// 判断文件的格式是否符合条件
$pExt = getExt($_FILES['picture']['name'],$picExt);
if ( $pExt == false){
    showMessage("图片的格式不正确！");
}else{
    $filename = md5(time()).".$pExt";
    $path = "../upfiles/audio/".$filename;
    move_uploaded_file($_FILES['picture']['tmp_name'],$path);
}


$aExt = getExt($_FILES['address']['name'],$audExt);
if ($aExt == false){
    showMessage("视频的格式不正确！");
}else{
    $filename = md5(time()).".$aExt";
    $path = "../upfiles/audio/".$filename;
    move_uploaded_file($_FILES['address']['tmp_name'],$path);
}


$names =  removeCharacters($_POST['names']);
$grade =  removeCharacters($_POST['grade']);
$publisher =  removeCharacters($_POST['publisher']);
$actor =  removeCharacters($_POST['actor']);
$director =  removeCharacters($_POST['director']);
$marker =  removeCharacters($_POST['marker']);
$language =  removeCharacters($_POST['language']);
$style =  removeCharacters($_POST['style']);
$types =  removeCharacters($_POST['types']);
$from =  removeCharacters($_POST['from']);
$publishtime =  removeCharacters($_POST['publishtime']);
$news =  removeCharacters($_POST['news']);
$remark =  removeCharacters($_POST['remark']);



?>