<meta charset="UTF-8" content="text/html">
<?php
session_start();
include "conn/conn.php";
include "inc/func.php";
include "inc/chec.php";
/*echo "<pre>";
print_r($_POST);
print_r($_FILES);die();*/
$p_type = array("jpg","jpeg","bmp","gif");
$f_type = array("avi","rm","rmvb","mp4","wav","mp3","mpg");
$audio_path = "upfiles/audio";
$video_path = "upfiles/video";
$picture_path ="";
$file_path = "";

/*get data*/
function get_data($data){
    $_data = isset($data)?$data:'';
    return htmlspecialchars(trim($_data));
}

/* 上传图片*/
if($_FILES['picture']['size'] > 0 && $_FILES['picture']['size'] < 700000){
    if(($postf = f_postfix($p_type,$_FILES['picture']['name'])) != false){
        if($_POST['action'] == "a"){
            $picture_path = $audio_path."/".time().".".$postf;
            if($_FILES['picture']['tmp_name']){
                move_uploaded_file($_FILES['picture']['tmp_name'],$picture_path);
            }else{
                echo "<script>alert('图片上传失败！');history.go(-1);</script>";
                exit();
            }
        }elseif($_POST['action'] == "v"){
            $picture_path = $video_path."/".time().".".$postf;
            if($_FILES['picture']['tmp_name'])
                move_uploaded_file($_FILES['picture']['tmp_name'],$picture_path);
            else{
                echo "<script>alert('图片上传失败！');history.go(-1);</script>";
                exit();
            }
        }
    }else{
        echo "<script>alert('图片的格式不正确，上传失败！');history.go(-1);</script>";
        exit();
    }
}elseif($_FILES['picture']['size'] > 700000){
    echo "<script>alert('失败，上传图片不能大于700k！');history.go(-1);</script>";
    exit();
}
else{
    $picture = "";
}
/******************************/
/* 上传文件视频/音频 */
if($_FILES['address']['size'] > 0){
    //上传视频
    if($_POST['action'] == "a"){
        if($_FILES['address']['size'] < 300000000){
            if(($postf = f_postfix($f_type,$_FILES['address']['name'])) != false){
                // $file_path 文件名
                $file_path = $audio_path."/".time().".".$postf;
                if($_FILES['address']['tmp_name']){
                    move_uploaded_file($_FILES['address']['tmp_name'],$file_path);
                }else{
                    echo "<script>alert('上传视频失败！');history.go(-1);</script>";
                    exit();
                }
            }
            else{
                echo "<script>alert('视频上传失败，视频格式不对！');history.go(-1);</script>";
                exit();
            }
        }else{
            echo "<script>alert('视频大于300M上传失败!');history.go(-1);</script>";
            exit();
        }
    }
    //上传音频
    elseif($_POST['action'] == "v"){
        if($_FILES['address']['size'] < 50000000){
            if(($postf = f_postfix($f_type,$_FILES['address']['name'])) != false){
                $file_path = $video_path."/".time().".".$postf;
                if($_FILES['address']['tmp_name']){
                    move_uploaded_file($_FILES['address']['tmp_name'],$file_path);
                }else{
                    echo "<script>alert('音频上传失败！');history.go(-1);</script>";
                    exit();
                }
            }
            else{
                echo "<script>alert('音频上传失败，格式不正确！');history.go(-1);</script>";
                exit();
            }
        }else{
            echo "<script>alert('音频大于50M上传失败！');history.go(-1);</script>";
            exit();
        }
    }
}else{
    echo "<script>alert('上传失败！');history.go(-1);</script>";
    exit();
}

/****************/
/*  posts信息  */
$names = get_data(@$_POST['names']);					//ÊÓÆµÃû³Æ
$grade = get_data(@$_POST['grade']);					//¼¶±ð
$sizes = get_data(@$_FILES['address']['size']);
$publisher = get_data(@$_POST['publisher']);
$actor = get_data(@$_POST['actor']);
$language = get_data(@$_POST['language']);
$style = get_data(@$_POST['style']);
$type =  get_data(@$_POST['type']);
$froms =  get_data(@$_POST['from']);
$publishtime =  get_data(@$_POST['publishtime']);
$news = get_data(@$_POST['news']);
$remark = get_data(@$_POST['remark']);
$name = get_data(@$_SESSION['name']);
$issueDate = date("Y-m-d H:i:s");
/*****************/
if($_POST['action'] == "a"){
    /*  audio sql */
    $director = get_data(@$_POST['director']);
    $marker = get_data(@$_POST['marker']);
    $a_sqlstr = "insert into tb_audio (name,picture,sizes,grade,publisher,actor,director,marker,languages,type,style,froms,publishtime,bool,remark
    ,property,address,username,issueDate)values('$names','$picture_path','$sizes','$grade','$publisher','$actor','$director','$marker','$language'
    ,'Audio','$style','$from','$publishtime','$news','$remark','用户','$file_path','$name','$issueDate')";
}
elseif($_POST['action'] == "v"){
    //video audio
    $actortype = get_data(@$_POST['actortype']);
    $ci = get_data($_POST['ci']);
    $qu =  get_data($_POST['qu']);
    $a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property
    ,address,userName,issueDate) values('$names','$picture_path','$actor','$ci','$qu','$actortype','Video','$style','$publisher','$froms','$sizes'
    ,'$language','$publishtime','$remark','用户','$file_path','$name','$issueDate')";
}
else
{
    echo "<script>alert('非法操作！');window.close();</script>";
    exit();
}
/*  将数据存入数据库 */
/***************************/
$a_rst = $conn->execute($a_sqlstr);
if(!($a_rst == false)){
    $quesql = "select id,counts from tb_account where id = ".$_SESSION['id'];
    $querst = $conn->execute($quesql);
    $count = $querst->fields[1];
    $count += 1;
    $addsql = "update tb_account set counts = ".$count." where id = ".$_SESSION['id'];
    $addrst = $conn->execute($addsql);
    if(!($addrst == false)){
        $_SESSION['counts'] += 1;
        echo "<script>top.opener.location.reload();alert('上传成功！');window.close();</script>";
        exit();
    }
}else{
    echo "<script>alert('失败！');history.go(-1);</script>";
    exit();
}
?>