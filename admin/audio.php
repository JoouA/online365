<?php
include_once "conn/conn.php";
include_once "inc/chec.php";
require_once "inc/chec_audio.php";
//分页
$page =  htmlspecialchars(trim($_GET['page']));
$num_sql = "select count(*) as totalPage from tb_audio";
$num_rst =  $conn->execute($num_sql);
$pageSize = 2;
// get the page of the table
$totalPage = ceil($num_rst->fields['totalPage']/$pageSize);
if ($page <= 0){
    $page = 1;
}
if ($page >= $totalPage){
    $page = $totalPage;
}
$offset = ($page - 1)*$pageSize;
$pre =  ($page == 1)? "上一页" : "<a href='main.php?action=audio&page=".($page - 1)."'>上一页</a>";
$next = ($page == $totalPage)? "下一页" : "<a href='main.php?action=audio&page=".($page + 1)."'>下一页</a>";
$str = '';
for ($i = 1; $i <= $totalPage;$i++){
    $str .= "&nbsp;&nbsp;&nbsp;"."<a href='main.php?action=audio&page=$i'>[$i]</a>";
}
$str .= "&nbsp;&nbsp;&nbsp;";


?>
<table width="380" height="440" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4" valign="top">
            <table width="380" height="60" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="20" colspan="4" align="center" valign="middle">视 频 数 据 管 理</td>
                </tr>
                <tr>
                    <td colspan="4" class="style1">
                        <table width="375" border="0" align="center" cellpadding="2" cellspacing="2">
                            <tr>
                                <td height="10" colspan="5" align="right" valign="middle">
                                    <a href="#" onclick="javacript:Wopen=open('operation.php?action=audioadd','添加视频','height=700,width=665,scrollbars=no');">数据添加</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="22" height="30" align="center" valign="middle">ID</td>
                                <td width="134" height="30" align="center" valign="middle">名称</td>
                                <td width="67" height="30" align="center" valign="middle">类别</td>
                                <td width="78" height="30" align="center" valign="middle">主演</td>
                                <td height="30" align="center" valign="middle">操作</td>
                            </tr>
                            <?php
                            // 判断当前的表中是否有数据，没有数据就不执行分页的sql了
                            $sqlstr_chk = "select * from tb_audio";
                            if ($conn->execute($sqlstr_chk)->_numOfRows > 0){
                                $sqlstr = "select * from tb_audio limit $offset,$pageSize";
                            }else{
                                $sqlstr = "select * from tb_audio";
                            }
                            $rst = $conn->execute($sqlstr);
                            while(!$rst->EOF){
                                ?>
                                <tr>
                                    <td height="18" align="center" valign="middle"><?php echo $rst->fields['id']; ?></td>
                                    <td height="18" align="center" valign="middle">
                                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=audio&id=<?php echo $rst->fields['id'];?>','查看视频','height=700,width=665,scrollbars=no');">
                                            <?php echo $rst->fields['name']; ?></a>
                                    </td>
                                    <td height="18" align="center" valign="middle"><?php echo $rst->fields['style']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $rst->fields['actor']; ?></td>
                                    <td height="18" align="center" valign="middle"><a href="del_audio_chk.php?id=<?php echo $rst->fields['id']; ?>" onclick="return audio_del_check();">删除</a></td>
                                    </form>
                                </tr>
                                <?php
                                if ($rst->_numOfRows > 0){
                                    $rst->MoveNext();
                                }
                            }
                            ?>
                        </table>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <?php

                        if ($totalPage>1){
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