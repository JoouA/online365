
<?php
    session_start();
    include_once "conn/conn.php";
    $username= htmlspecialchars(trim($_POST['name']));
    $password= htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)){
        echo "<meta charset='utf-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('账号或者密码错误');history.go(-1);</script>";
        exit();
    }

    $rel_password = md5($password);

    $sql = "select * from `tb_account` where name="."'".$username."'"." and password="."'".$rel_password."'";
    $u_res = $conn->execute($sql);

    if (!$u_res->EOF){
        if ($u_res->fields['whether'] == 0){
            echo "<meta charset='utf-8' content='text/html'>";
            echo "<script type='text/javascript'>alert('该账号被冻结！');history.go(-1);</script>";
            exit();
        }else{
            $g_res =  $conn->execute('select * from tb_grade');
            if ($u_res->fields['counts'] >= $g_res->fields['price']){
                 $grade = array();
                 $grade['grade'] = '高级会员';

                 $updateSql = "update tb_account set grade='". $grade['grade']."'";
                 $conn->execute($updateSql);
                 $u_res = $conn->execute($sql);
            }

            $_SESSION['name'] = $u_res->fields['name'];
            $_SESSION['id'] = $u_res->fields['id'];
            $_SESSION['grade'] = $u_res->fields['grade'];
            $_SESSION['counts'] = $u_res->fields['counts'];
            echo "<meta charset='utf-8' content='text/html'>";
            echo "<script type='text/javascript'>alert('登陆成功！');window.location.href='index.php'; </script>";
        }
    }

?>


