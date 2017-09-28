<?php
include "conn/conn.php";
include "inc/chec.php";
include "inc/chec_vip_data.php";
?>
<table width="380" height="440" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4" valign="top">
            <table width="380" height="60" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="20" colspan="4" align="center" valign="middle">会 员 数 据 管 理</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table width="375" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('operation.php?action=v_found','参数更新','height=500,width=665,scrollbars=no');">会员信息查询</a></td>
                            </tr>
                            <tr>
                                <td width="40" height="30" align="center" valign="middle">ID</td>
                                <td width="54" height="30" align="center" valign="middle">等级</td>
                                <td width="76" height="30" align="center" valign="middle">用户名</td>
                                <td width="78" height="30" align="center" valign="middle">真实姓名</td>
                                <td width="95" align="center" valign="middle">操作</td>
                            </tr>
                            <?php
                            if(!isset($_GET['types']))
                                $v_sqlstr="select * from tb_account";
                            else{
                                switch ($_GET['types']){
                                    case "name":
                                        $other="name like '%".$_GET['key']."%'";
                                        break;
                                    case "realname":
                                        $other="realname like '%".$_GET['key']."%'";
                                        break;
                                    case "grade":
                                        $other="grade='".$_GET['key']."'";
                                        break;
                                    case "counts":
                                        $other="counts<='".$_GET['key']."'";
                                        break;
                                    case "sex":
                                        $other="sex='".$_GET['key']."'";
                                        break;
                                }
                                $v_sqlstr="select * from tb_account where ".$other;
                            }
                            $v_rst = $conn->execute($v_sqlstr);
                          /*  echo "<pre>";
                            print_r($v_rst->fields);
                            die();*/
                            while(!$v_rst->EOF){
                                ?>
                                <tr>
                                    <td height="18" align="center" valign="middle"><?php echo $v_rst->fields['id']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $v_rst->fields['grade']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $v_rst->fields['name']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $v_rst->fields['realName']; ?></td>
                                    <form name="form1" method="post" action="freeze_chk.php">
                                        <td height="18" align="center" valign="middle">
                                            <?php
                                            if($v_rst->fields['whether']=="1")
                                                $fd = "冻结";
                                            else
                                                $fd = "解冻";
                                            ?>
                                            <input type="hidden" name="id" value="<?php echo $v_rst->fields['id']; ?>">
                                            <input type="hidden" name="whether" value="<?php echo $v_rst->fields['whether']; ?>">
                                            <input type="submit" name="Submit2" class="submit" value="<?php echo $fd; ?>">
                                            <a href="del_freeze_chk.php?id=<?php echo $v_rst->fields['id']; ?>" onclick="return account_del_check();">删除</a>
                                        </td>
                                    </form>
                                </tr>
                                <?php
                                $v_rst->movenext();
                            }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>