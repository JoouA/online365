<?php
include "inc/chec.php";
include "conn/conn.php";
$page =  htmlspecialchars(trim($_GET['page']));
$pageSize = 2;
?>
<table width="380" height="440" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4" valign="top">
            <table width="380" height="60" border="0" cellpadding="0" cellspacing="0"  >
                <tr>
                    <td height="20" colspan="4" align="center" valign="middle">上 传 日 志 管 理</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table width="375" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('operation.php?action=l_found','添加目录','height=500,width=665,scrollbars=no');">日志查询</a></td>
                            </tr>
                            <tr>
                                <td height="30" align="center" valign="middle">ID</td>
                                <td height="30" align="center" valign="middle">数据名称</td>
                                <td height="30" align="center" valign="middle">用户名</td>
                                <td height="30" align="center" valign="middle">上传时间</td>
                                <td height="30" align="center" valign="middle">操作</td>
                            </tr>
                            <?php
                            $years=date("Y");
                            $months=date("m");
                            switch (@$_GET['types']){
                                case "all":
                                    $q_date = $years."-".$months."-".$_GET['days'];
                                    $l_sqlstr="select id,name,userName,issueDate,type  from tb_audio where property='用户' and issueDate like '%".$q_date."%' Union select id,name,userName,issueDate,type from tb_video where property='用户' and issueDate like '%".$q_date."%'";
                                    $ahref = "main.php?action=log&types=all&days=".$_GET['days']."&page=";
                                    break;
                                case "audio":
                                    $q_date = $years."-".$months."-".$_GET['days'];
                                    $l_sqlstr="select id,name,userName,issueDate,type,address from tb_audio where property='用户' and issueDate like '%".$q_date."%'";
                                    $ahref = "main.php?action=log&types=audio&days=".$_GET['days']."&page=";
                                    break;
                                case "video":
                                    $q_date = $years."-".$months."-".$_GET['days'];
                                    $l_sqlstr="select id,name,userName,issueDate,type,address from tb_video where property='用户' and issueDate like '%".$q_date."%'";
                                    $ahref = "main.php?action=log&types=video&days=".$_GET['days']."&page=";
                                    break;
                                default:
                                    $l_sqlstr="select id,name,userName,issueDate,type,address from tb_audio where property='用户' Union select id,name,userName,issueDate,type,address from tb_video where property='用户'";
                                    $ahref = "main.php?action=log&page=";
                                    break;
                            }

                            // 数据的条数
                            $numberTotal = $conn->execute($l_sqlstr)->_numOfRows;
                            // 分多少页
                            $totalPage = ceil($numberTotal/$pageSize);

                            if (!$conn->execute($l_sqlstr)->EOF){
                                if ($page <= 0){
                                    $page = 1;
                                }
                                if ($page >= $totalPage){
                                    $page = $totalPage;
                                }
                                $offset = ($page - 1)*$pageSize;
                                $pre =  ($page == 1)? "上一页" : "<a href='$ahref".($page - 1)."'>上一页</a>";
                                $next = ($page == $totalPage)? "下一页" : "<a href='$ahref".($page + 1)."'>下一页</a>";
                                $str = '';
                                for ($i = 1; $i <= $totalPage;$i++){
                                    $str .= "&nbsp;&nbsp;&nbsp;"."<a href='{$ahref}{$i}'>[$i]</a>";
                                }
                                $str .= "&nbsp;&nbsp;&nbsp;";

                                $l_sqlstr = $l_sqlstr." limit $offset,$pageSize";
                                $l_rst = $conn->execute($l_sqlstr);
                            }else{
                                $l_rst = $conn->execute($l_sqlstr);
                            }
                            while(!$l_rst->EOF){
                                ?>
                                <tr>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['id']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['name']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['userName']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['issueDate']; ?></td>
                                    <form name="form1" method="post" action="">
                                        <td height="18" align="center" valign="middle">
                                            <input type="button" name="Submit2" class="submit" value="详细" onclick="javascript:Wopen=open('operation.php?action=<?php echo ($l_rst->fields['type'])=="Audio"?"audio":"video"; ?>&id=<?php echo $l_rst->fields['id']; ?>','','height=700,width=665,scrollbars=no');">
                                        </td>
                                    </form>
                                </tr>
                                <?php
                                if (!$l_rst->EOF){
                                    $l_rst->movenext();
                                }
                            }
                            ?>
                        </table>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <?php
                        if ($numberTotal > $pageSize ){
                            echo $pre.'&nbsp;'.$str.'&nbsp;'.$next;
                        }else{
                            echo "";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>