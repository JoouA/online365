<?php
include "inc/chec.php";
include "conn/conn.php";

$page =  htmlspecialchars(trim($_GET['page']));
$num_sql = "select count(*) as totalPage from tb_audiolist";
$num_rst =  $conn->execute($num_sql);
$pageSize = 5;
// get the page of the table
$totalPage = ceil($num_rst->fields['totalPage']/$pageSize);
if ($page <= 0){
    $page = 1;
}
if ($page >= $totalPage){
    $page = $totalPage;
}
$offset = ($page - 1)*$pageSize;
$pre =  ($page == 1)? "上一页" : "<a href='main.php?action=audioList&page=".($page - 1)."'>上一页</a>";
$next = ($page == $totalPage)? "下一页" : "<a href='main.php?action=audioList&page=".($page + 1)."'>下一页</a>";
$str = '';
for ($i = 1; $i <= $totalPage;$i++){
    $str .= "&nbsp;&nbsp;&nbsp;"."<a href='main.php?action=audioList&page=$i'>[$i]</a>";
}
$str .= "&nbsp;&nbsp;&nbsp;";


$l_sqlstr = "select * from tb_audiolist ORDER by id ASC limit $offset,$pageSize";
$l_rst = $conn->execute($l_sqlstr);
/*echo "<pre>";
print_r($l_rst->fields);die();*/
?>
<table width="380" height="440" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4" valign="top">
            <table width="380" height="60" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="20" colspan="4" align="center" valign="middle">视 频 目 录 管 理</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table width="375" border="0" align="center" cellpadding="2" cellspacing="2">
                            <tr>
                                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('operation.php?action=audiolist','添加目录','height=500,width=665,scrollbars=no');">目录添加</a></td>
                            </tr>
                            <tr>
                                <td height="30" align="center" valign="middle">ID</td>
                                <td height="30" align="center" valign="middle">等级</td>
                                <td height="30" align="center" valign="middle">名称</td>
                                <td height="30" align="center" valign="middle">父级名称</td>
                                <td height="30" align="center" valign="middle">操作</td>
                            </tr>
                            <?php
                            while(!$l_rst->EOF){
                                ?>
                                <tr>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['id']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['grade']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['name']; ?></td>
                                    <td height="18" align="center" valign="middle"><?php echo $l_rst->fields['father'] ?></td>
                                    <td height="18" align="center" valign="middle">
                                        <a href="del_list_chk.php?action=audiolist&id=<?php echo $l_rst->fields['id']; ?>" onclick="return del_chk();">删除</a>
                                    </td>
                                </tr>
                                <?php
                                $l_rst->MoveNext();
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