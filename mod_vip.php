<?php
    include_once "conn/conn.php";
    $my_sql = 'select * from tb_account WHERE id='.$_SESSION['id'];
    $m_rst = $conn->execute($my_sql);
?>
<html>
<head>
    <meta charset="utf-8" content="text/html">
    <script type="text/javascript" src="js/chk.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
<div align="center">
<?php if(!$m_rst->EOF){ ?>
<table width="500px" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <table width="500px" border="0" cellspacing="0" cellpadding="0">
                <form id="reg" name="reg" method="post" action="mod_vip_chk.php">
                    <tr>
                        <td width="50px" rowspan="18" align="center" valign="top">&nbsp;</td>
                        <td height="20px" colspan="2" align="center" valign="top" class="top_td">&nbsp;</td>
                        <td width="50px" rowspan="18" align="center" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td" scope="col">用户名:</td>
                        <td align="left" valign="middle" class="right_td" scope="col"><input type="text" name="name" id="name" class="usual" value="<?php echo $m_rst->fields['name']; ?>" readonly="readonly" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">密码:</td>
                        <td align="left" valign="middle" class="right_td"><input type="password" name="password" id="password" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">确认密码:</td>
                        <td align="left" valign="middle" class="right_td"><input type="password" name="t_password" id="t_password" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /><span class="STYLE1"> *</span></td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">姓名:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="realname" id="realname" class="usual" value="<?php echo $m_rst->fields['realName']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" required/>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20" align="right" valign="middle" class="left_td">性别:</td>
                        <td align="left" valign="middle" class="right_td">
                            <?php if($m_rst->fields['sex'] == "男"){ ?>
                                <input name="sex" id="sex" type="radio" value="男" checked />男
                                <input name="sex" id="sex" type="radio" value="女"/>女
                            <?php }else{?>
                                <input name="sex" id="sex" type="radio" value="男" />
                                <input name="sex" id="sex" type="radio" value="女" checked />女
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">年龄:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="age" id="age" class="usual" value="<?php echo $m_rst->fields['age']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" />
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">编号:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="numbers" id="numbers" class="usual" value="<?php echo $m_rst->fields['numbers']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">职业:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="job" id="job" class="usual" value="<?php echo $m_rst->fields['job']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">E-mail:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="email" id="email" class="usual" value="<?php echo $m_rst->fields['email']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" required/>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">手机号码:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="phone" id="phone" class="usual" value="<?php echo $m_rst->fields['phone']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">地址:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="address" id="address" class="usual" value="<?php echo $m_rst->fields['address']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">QQ:</td>
                        <td align="left" valign="middle" class="right_td">
                            <input type="text" name="qq" id="qq" class="usual" value="<?php echo $m_rst->fields['qq']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" />
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" height="20px" align="right" valign="middle" class="left_td">个人主页:</td>
                        <td align="left" valign="middle" class="right_td"><input type="text" name="http" id="http" class="usual" value="<?php echo $m_rst->fields['http']; ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
                    </tr>
                    <tr>
                        <td height="40px" colspan="2" align="center" valign="middle" class="bottom_td">
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                            <input name="regi"  type="submit" value="保存" onclick="return reg_chk();" />
                        </td>
                    </tr>
                </form>
            </table>
        </td>
    </tr>
</table>
<?php } ?>
</div>
</body>
</html>