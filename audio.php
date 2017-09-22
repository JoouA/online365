<?php
    include_once "conn/conn.php";
    $sql = "select * from tb_audio order by downTime desc limit 0,5";
    $t_rst = $conn->execute($sql);
    $num = 1;
?>

<table width="265px" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="262px" height="28px" colspan="3" align="center" valign="middle" background="images/file_taxis.jpg">
            &nbsp;
        </td>
    </tr>
    <?php while(!$t_rst->EOF){ ?>
    <tr>
        <td width="25px"  height="30px" align="center" valign="middle" class="f_td"><?php echo $num; ?></td>
        <td width="215px" align="center" valign="middle" class="f_td">
            <a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo $t_rst->fields['id']; ?>','','height=700,width=665,scrollbars=no');">
                <?php echo $t_rst->fields['name']; ?>
            </a>
        </td>
        <td width="25px" align="center" valign="middle" class="f_td">
            <?php echo $t_rst->fields['downTime']; ?>
        </td>
    </tr>
    <?php
        $num++;
        $t_rst->MoveNext();
    }
    ?>
</table>
