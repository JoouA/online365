<meta charset="UTF-8" content="text/html">
<?php
if(isset($_POST['regi'])) {
    session_start();
    include_once "conn/conn.php";
    function htmlCharacter($data)
    {
        return htmlspecialchars(trim($data));
    }
    // set Session
    function setSession()
    {
        $_SESSION['name'] = htmlCharacter($_POST['name']);;
        $_SESSION['question'] = htmlCharacter($_POST['question']);;
        $_SESSION['answer'] = htmlCharacter($_POST['answer']);;
        $_SESSION['age'] = htmlCharacter($_POST['age']);;
        $_SESSION['realname'] = htmlCharacter($_POST['realname']);;
        $_SESSION['sex'] = htmlCharacter($_POST['sex']);;
        $_SESSION['numbers'] = htmlCharacter($_POST['numbers']);;
        $_SESSION['job'] = htmlCharacter($_POST['job']);;
        $_SESSION['email'] = htmlCharacter($_POST['email']);;
        $_SESSION['phone'] = htmlCharacter($_POST['phone']);;
        $_SESSION['address'] = htmlCharacter($_POST['address']);;
        $_SESSION['qq'] = htmlCharacter($_POST['qq']);;
        $_SESSION['http'] = htmlCharacter($_POST['http']);;
    }

    $name = htmlCharacter($_POST['name']);
    $password = md5(htmlCharacter($_POST['password']));
    $t_password = md5(htmlCharacter($_POST['t_password']));
    $question = htmlCharacter($_POST['question']);
    $answer = htmlCharacter($_POST['answer']);
    $realname = htmlCharacter($_POST['realname']);
    $sex = htmlCharacter($_POST['sex']);
    $numbers = htmlCharacter($_POST['numbers']);
    $job = htmlCharacter($_POST['job']);
    $email = htmlCharacter($_POST['email']);
    $phone = htmlCharacter($_POST['phone']);
    $address = htmlCharacter($_POST['address']);
    $qq = htmlCharacter($_POST['qq']);
    $http = htmlCharacter($_POST['http']);
    $sql = "select * from tb_account WHERE `name`='$name'";
    $res = $conn->execute($sql);
    if (!$res->EOF) {
        echo "<script type='text/javascript'>alert('用户名已存在！'); window.history.back();</script>";
        setSession();
        exit();
    }


    if (empty($name)) {
        echo "<script type='text/javascript'>alert('用户名不能为空');window.history.go(-1);</script>";
        setSession();
        exit();
    } elseif (empty($password)) {
        echo "<script type='text/javascript'>alert('密码不能为空');window.history.go(-1);</script>";
        setSession();
        exit();
    } elseif (strlen(htmlCharacter($_POST['password'])) < 3) {
        echo "<script type='text/javascript'>alert('密码不能小于三位');window.history.go(-1);</script>";
        setSession();
        exit();
    } elseif ($password != $t_password) {
        echo "<script type='text/javascript'>alert('两次输入的密码不一样');window.history.go(-1);</script>";
        setSession();
        exit();
    } elseif (empty($question)) {
        echo "<script type='text/javascript'>alert('问题不能为空');window.history.go(-1);</script>";
        setSession();
        exit();
    } elseif (empty($answer)) {
        echo "<script type='text/javascript'>alert('问题答案不能为空');window.history.go(-1);</script>";
        setSession();
        exit();
    }

    $insert_sql = "INSERT INTO `tb_account`(`name`,`password`,`question`,`answer`,`realName`,`sex`,`numbers`,`job`,`email`,`phone`,`address`,`qq`,`http`)
       VALUES('$name','$password','$question','$answer','$realname','$sex','$numbers','$job','$email','$phone','$address','$qq','$http')";

    $in_res = $conn->execute($insert_sql);
    if ($in_res == false) {
        echo "<script type='text/javascript'>alert('用户注册失败！');window.history.go(-1);</script>";
        setSession();
        exit();
    } else {
        echo "<script type='text/javascript'>alert('用户注册成功，重新登录!');window.close();</script>";
        session_destroy();
        exit();
    }
}else{
    echo "<script type='text/javascript'>window.history.back();</script>";
    exit();
}
