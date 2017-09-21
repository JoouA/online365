<html>
<head>
    <meta charset="UTF-8" content="text/html">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reg.css">
    <script>
        function found_chk(){
            if(document.getElementById("username").value == ""){
                alert("帐号不允许为空");
                document.getElementById("username").focus();
                return false;
            }
            if(document.getElementById("question").value == ""){
                alert("密码提示问题不允许为空");
                document.getElementById("question").focus();
                return false;
            }

            if(document.getElementById("answer").value == ""){
                alert("密码提示答案不允许为空");
                document.getElementById("answer").focus();
                return false;
            }
        }
        function chk_pwd(){
            if(document.getElementById("password").value == ""){
                alert("密码不允许为空");
                document.getElementById("password").focus();
                return false;
            }
            if(document.getElementById("password").value != document.getElementById("two_pwd").value){
                alert("两次密码不一致");
                document.getElementById("password").focus();
                return false;
            }
        }

    </script>
    <style type="text/css">
        .submit {
            border: 1px solid #000000;
        }
    </style>
</head>
<body>
<div align="center">
<?php include_once "conn/conn.php";?>
<?php
// reset password
if(@$_POST['action']=='mod'){
    $password = htmlspecialchars(trim($_POST['password']));
    $true_password = md5($password);
    $update_sql = "update tb_account set `password`='$true_password'";
    if(($conn->execute($update_sql))==false){
        echo "<meta charset='utf-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('重置密码失败！');</script>";
    }else{
        echo "<meta charset='utf-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('重置密码成功！');window.close();</script>";
    }
}
?>
<?php
    if(@$_POST['action']=='chk'){
        $username = htmlspecialchars(trim($_POST['username']));
        $question = htmlspecialchars(trim($_POST['question']));
        $answer = htmlspecialchars(trim($_POST['answer']));
        $sql = "select * from tb_account WHERE `name`='$username' AND `question`='$question' AND `answer`='$answer'";
        $f_rst = $conn->execute($sql);
        if(!$f_rst->EOF){?>
            <form method="post" action="#">
            <table width="400px" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100px" height="30px" align="right" valign="middle" scope="col">用户名：</td>
                    <td width="294px" height="30px" align="left" valign="middle" scope="col">
                        <input name="username" id="username" type="text" size="25" readonly="readonly" value="<?php echo $f_rst->fields['name'];  ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
                        <input type="hidden" name="id" value="">
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle" scope="col">请输入密码：</td>
                    <td height="30" align="left" valign="middle" scope="col"><input name="password" type="password" size="25" id="password" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
                </tr>
                <tr>
                    <td width="100" height="30" align="right" valign="middle">确认密码：</td>
                    <td width="294" height="30" align="left" valign="middle"><input name="two_pwd" id="two_pwd" type="password" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
                </tr>
                <tr>
                    <td height="30">&nbsp;</td>
                    <td height="30">
                        <input type="hidden" name="action" value="mod">
                        <input type="submit" name="Submit" value="提交" class="submit" onClick="return chk_pwd();">&nbsp;
                        <input type="reset" name="Submit2" value="重置" class="submit">
                    </td>
                </tr>
            </table>
            </form>
        <?php }
    }else{ ?>
        <form method="post" action="#">
            <table width="400px" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100px" height="30px" align="right" valign="middle" scope="col">用户名：</td>
                    <td width="294px" height="30px" align="left" valign="middle" scope="col">
                        <input name="username" id="username" type="text" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
                    </td>
                </tr>
                <tr>
                    <td height="30px" align="right" valign="middle" scope="col">密码提示问题：</td>
                    <td height="30px" align="left" valign="middle" scope="col">
                        <input name="question" type="text" size="25" id="question" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
                    </td>
                </tr>
                <tr>
                    <td width="100px" height="30px" align="right" valign="middle">密码提示答案：</td>
                    <td width="294px" height="30px" align="left" valign="middle">
                        <input name="answer" id="answer" type="text" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
                    </td>
                </tr>
                <tr>
                    <td height="30">&nbsp;</td>
                    <td height="30">
                        <input type="hidden" name="action" value="chk">
                        <input type="submit" name="Submit" value="提交" class="submit" onClick="return found_chk();">&nbsp;
                        <input type="reset" name="Submit2" value="重置" class="submit">
                    </td>
                </tr>
            </table>
        </form>
    <?php }?>
</div>
</body>
</html>
