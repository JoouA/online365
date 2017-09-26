<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
require_once "conn/conn.php";
require_once "inc/func.php";
$picExt = array('jpg','png','bmp');
$audExt = array('mp4','mkv','rmvb','avi','3gp');
$videoExt = array('mp3','wma');
/*echo "<pre>";
print_r($_FILES);
print_r($_POST);
die();*/

function removeCharacters($data){
    return htmlspecialchars(trim($data));
}

function showMessage($message){
    echo "<script type='text/javascript'>alert('$message');</script>";
    exit();
}
$post = removeCharacters(trim($_POST['action']));
if($post == 'a'){
    if ($_FILES['picture']['error'] > 0 || $_FILES['address']['error'] > 0){
        showMessage("文件上传出错");
    }
    // 线判断文件的大小
    if ($_FILES['picture']['size'] >  2000000){
        showMessage("图片文件大于2M，失败！");
    }
    if ($_FILES['address']['size'] > 500000000){
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
}elseif($post == 'v'){
    if ($_FILES['picture']['error'] > 0 || $_FILES['address']['error'] > 0){
        showMessage("文件上传出错");
    }
    // 线判断文件的大小
    if ($_FILES['picture']['size'] >  2000000){
        showMessage("图片文件大于2M，失败！");
    }
    if ($_FILES['address']['size'] > 20000000){
        showMessage('音频文件大于20M上传失败！');
    }
    // 判断文件的格式是否符合条件
    $pExt = getExt($_FILES['picture']['name'],$picExt);
    if ( $pExt == false){
        showMessage("图片的格式不正确！");
    }else{
        $filename = md5(time()).".$pExt";
        $path = "../upfiles/video/".$filename;
        move_uploaded_file($_FILES['picture']['tmp_name'],$path);
    }
    $vExt = getExt($_FILES['address']['name'],$videoExt);
    if ($vExt == false){
        showMessage("音频的格式不正确！");
    }else{
        $filename = md5(time()).".$vExt";
        $path = "../upfiles/video/".$filename;
        move_uploaded_file($_FILES['address']['tmp_name'],$path);
    }
}else{
    showMessage('非法操作！');
}

$names =  removeCharacters($_POST['names']);
$sizes = $_FILES['address']['size'];
$publisher =  removeCharacters($_POST['publisher']);
$actor =  removeCharacters($_POST['actor']);
$language =  removeCharacters($_POST['language']);
$type =  removeCharacters($_POST['types']);
$style =  removeCharacters($_POST['style']);
$from =  removeCharacters($_POST['from']);
$publishtime =  removeCharacters($_POST['publishtime']);
$remark =  removeCharacters($_POST['remark']);
$name = $_SESSION['admin'];
$issueDate = date("Y-m-d H-m-i");

if($post == 'a'){
    // 视频添加
    $picture_path = "upfiles/audio/".md5(time()).".$pExt";
    $file_path = "upfiles/audio/".md5(time()).".$aExt";
    $grade =  removeCharacters($_POST['grade']);
    $director =  removeCharacters($_POST['director']);
    $marker =  removeCharacters($_POST['marker']);
    $news =  removeCharacters($_POST['news']);//18
    $a_sqlstr = "insert into tb_audio (name,picture,sizes,grade,publisher,actor,director,marker,languages,type,style,froms,publishTime,bool,remark
    ,property,address,username,issueDate)values('$names','$picture_path','$sizes','$grade','$publisher','$actor','$director','$marker','$language'
    ,'$type','$style','$from','$publishtime','$news','$remark','用户','$file_path','$name','$issueDate')";

    $is_success = $conn->execute($a_sqlstr);
}elseif($post == 'v'){
    //歌曲添加
    $picture_path = "upfiles/video/".md5(time()).".$pExt";
    $file_path = "upfiles/video/".md5(time()).".$vExt";
    $actortype = removeCharacters($_POST['actortype']);
    $ci = removeCharacters($_POST['ci']);
    $qu =  removeCharacters($_POST['qu']); // 17
    $a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property
    ,address,userName,issueDate) values('$names','$picture_path','$actor','$ci','$qu','$actortype','$type','$style','$publisher','$from','$sizes'
    ,'$language','$publishtime','$remark','用户','$file_path','$name','$issueDate')";

    $is_success = $conn->execute($a_sqlstr);
}

if($is_success == false){
    echo "<script type='text/javascript'>alert('上传失败！');window.history.back();</script>";
}else{
    echo "<script type='text/javascript'>top.opener.location.reload();alert('上传成功！'); window.close();</script>";
}

?>