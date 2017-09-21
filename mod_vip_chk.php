<meta charset="utf-8">
<?php
    session_start();
    include_once "conn/conn.php";

    function htmlCharacters($data){
        return htmlspecialchars(trim($data));
    }

    $password = md5(htmlCharacters($_POST['password']));
    $realName = htmlCharacters($_POST['realname']);
    $sex = htmlCharacters($_POST['sex']);
    $age = htmlCharacters($_POST['age']);
    $numbers = htmlCharacters($_POST['numbers']);
    $job = htmlCharacters($_POST['job']);
    $email = htmlCharacters($_POST['email']);
    $phone = htmlCharacters($_POST['phone']);
    $address = htmlCharacters($_POST['address']);
    $qq = htmlCharacters($_POST['qq']);
    $http = htmlCharacters($_POST['http']);
    $id = htmlCharacters($_POST['id']);

    $updateSql = "update `tb_account` set password='$password',`realName`='$realName',`sex`='$sex',`age`='$age',`numbers`='$numbers',`job`='$job',`email`='$email',`phone`='$phone',`address`='$address',`qq`='$qq',`http`='$http' WHERE id=$id";
    $res = $conn->execute($updateSql);
    if ($res){
        echo "<meta charset='UTF-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('信息修改成功');window.location.href='index.php';</script>";
    }else{
        echo "<meta charset='UTF-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('信息修改失败');history.go(-1);</script>";
    }
?>