<?php
    include_once "conn/conn.php";

    $sql = "select * from tb_video  order by downTime desc limit 0,5";

    $data = $conn->execute($sql);
    $num = 1;
?>

<table width="265px" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3" width="262px" height="28px" align="center" valign="middle" background="images/music_taxis.jpg">&nbsp;</td>
    </tr>
    <?php while(!$data->EOF){ ?>
    <tr>
        <td width="25px"  height="30px" align="center" valign="middle" class="f_td"><? echo $num; ?></td>
        <td width="215px" align="center" valign="middle" class="f_td">
            <a href="#" onclick="javascript:Wopen=open('operation.php?action=v_intro&id=<?php echo $data->fields['id']?>','','height=700,width=665,scrollbars=no');">
                <?php echo $data->fields['name']?>
        </td>
        <td width="25px" align="center" valign="middle" class="f_td"><?php echo $data->fields['downTime']; ?></td>
    </tr>
    <?php
        $num++;
        $data->MoveNext();
    }
    ?>
</table>