<style type="text/css">

    <!--

    #reg .right_td #chk_name {

        background-color: #FFFFFF;

        height: 15px;

        width: 75px;

        border: 0px solid #FFFFFF;

        font-size: 12px;

        color: #990000;

    }

    -->

</style>

<script  type="text/javascript">
    function chkname(){
        var name = document.reg.name.value;
        if(name==""){
            alert("请输入用户昵称");
            document.reg.name.focus();
            return false;
        }else{
            open("chkname.php?name="+name+"" ,"CHK","height=50,width=200,scrollbars=no,top=200,left=200");
        }
    }
    function reg_reset()
    {
        document.reg=null;
    }
</script>
<script type="text/javascript" src="js/chk.js"></script>
<div align="center">
    <table width="500px" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <table width="500px" border="0" cellspacing="0" cellpadding="0">
                    <form id="reg" name="reg" method="post" action="register_chk.php">
                        <tr>
                            <td width="50px" rowspan="18" align="center" valign="top">&nbsp;</td>
                            <td height="20px" colspan="2" align="center" valign="top" class="top_td">&nbsp;</td>
                            <td width="50px" rowspan="18" align="center" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td" scope="col">用户名：</td>
                            <td align="left" valign="middle" class="right_td" scope="col">
                                <input type="text" name="name" id="name"  value="<?php if (@$_SESSION['name']!=''){echo @$_SESSION['name'];}else{ echo '';} ?>" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" required/><span class="STYLE1"> *</span>
                                <input type="button" name="chk_name" id="chk_name" value="检测用户名" onclick="return chkname()"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">密码：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="password" name="password" id="password" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>(最少3位)
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">确认密码：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="password" name="t_password" id="t_password" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /><span class="STYLE1"> *</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">密码提示问题：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="question" value="<?php if (@$_SESSION['question']!=''){echo @$_SESSION['question'];}else{ echo '';} ?>" id="question" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">问题答案：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="answer" id="answer" value="<?php if (@$_SESSION['answer']!=''){echo @$_SESSION['answer'];}else{ echo '';} ?>" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">真实姓名：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="realname" id="realname" value="<?php if (@$_SESSION['realname']!=''){echo @$_SESSION['realname'];}else{ echo '';} ?>" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>

                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">性别：</td>
                            <td align="left" valign="middle" class="right_td">
                                <?php if (@$_SESSION['sex']!='') { ?>
                                    <input name="sex" id="sex" type="radio" value="man"  <?php if (@$_SESSION['sex']=='man') echo 'checked'; ?>/>男
                                    <input name="sex" id="sex" type="radio" value="male" <?php if (@$_SESSION['sex']=='male') echo 'checked'; ?>/>女
                                <?php }else{ ?>
                                    <input name="sex" id="sex" type="radio" value="man" checked />男
                                    <input name="sex" id="sex" type="radio" value="male"/>女
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">年龄：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="age" id="age" class="usual" value="<?php if (@$_SESSION['age']!=''){echo @$_SESSION['age'];}else{ echo '';} ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">身份证号：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="numbers" id="numbers" value="<?php if (@$_SESSION['numbers']!=''){echo @$_SESSION['numbers'];}else{ echo '';} ?>" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">职业：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="job" id="job" value="<?php if (@$_SESSION['job']!=''){echo @$_SESSION['job'];}else{ echo '';} ?>" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                            </td>
                        </tr>

                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">E-mail：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="email" id="email" value="<?php if (@$_SESSION['email']!=''){echo @$_SESSION['email'];}else{ echo '';} ?>" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>

                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">联系电话：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="phone" id="phone" class="usual"  value="<?php if (@$_SESSION['phone']!=''){echo @$_SESSION['phone'];}else{ echo '';} ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>

                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">联系地址：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="address" id="address" class="usual" value="<?php if (@$_SESSION['address']!=''){echo @$_SESSION['address'];}else{ echo '';} ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>

                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">QQ：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="qq" id="qq" class="usual" value="<?php if (@$_SESSION['qq']!=''){echo @$_SESSION['qq'];}else{ echo '';} ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" />
                            </td>
                        </tr>

                        <tr>
                            <td width="100px" height="20px" align="right" valign="middle" class="left_td">个人主页：</td>
                            <td align="left" valign="middle" class="right_td">
                                <input type="text" name="http" id="http" class="usual" value="<?php if (@$_SESSION['http']!=''){echo @$_SESSION['http'];}else{ echo '';} ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>
                            </td>
                        </tr>

                        <tr>
                            <td height="30px" colspan="2" align="center" valign="middle" class="bottom_td">
                                <input name="regi" type="submit"  value="注册" onclick="return reg_chk();" />(<span class="STYLE1">*</span>号为必填项)
                                <input name="reset" type="reset"  value="重置" onclick="return reg_reset();"  /></td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table>
</div>
<?php  session_destroy() ?>
