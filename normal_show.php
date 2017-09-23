<table width="605px" border="0" cellspacing="0" cellpadding="0" class="right_table">
    <tr>
        <td height="30px" colspan="6" align="center" valign="middle" background="images/new_file_left.jpg" style=" font-size:14px; color:#FFFFFF;">查询结果</td>
    </tr>
    <tr>
        <td width="51px" height="20" align="center" valign="middle">类别</td>
        <td width="225px" align="center" valign="middle" ><?php echo (($_POST['m_type'] == "audio")?"电影名称":"歌曲名称"); ?></td>
        <td width="128px" align="center" valign="middle" ><?php echo (($_POST['m_type'] == "audio")?"主演":"主唱"); ?></td>
        <td width="57px" align="center" valign="middle" ><?php echo (($_POST['m_type'] == "audio")?"在线观看":"在线试听"); ?></td>
        <td width="60px" align="center" valign="middle" >下载</td>
        <td width="84px" align="center" valign="middle" >介绍</td>
    </tr>
    <?php
    $l_sqlstr = "select id,style,name,actor,remark,address from tb_".$_POST['m_type']." where name like '%".$_POST['k_word']."%'";
    $l_rst = $conn->execute($l_sqlstr);
    while(!$l_rst->EOF){
        ?>
        <tr onmouseover="this.style.backgroundColor='#E8FEFF'" onmouseout="this.style.backgroundColor=''" onchange="k_change();">
            <td height="30" align="center" valign="middle"><?php echo $l_rst->fields[1]; ?></td>
            <td  align="center" valign="middle"><?php echo $l_rst->fields[2]; ?></td>
            <td  align="center" valign="middle"><?php echo $l_rst->fields[3]; ?></td>
            <td  align="center" valign="middle">
                <?php
                if(isset($_SESSION['name'])){
                    ?>
                    <a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_POST['m_type'] == "audio")?"see":"listen");?>&id=<?php echo $l_rst->fields['id']; ?>','','height=700,width=665,scrollbars=yes');">
                        <img src="images/online_icon.jpg" height="20" width="20" border="0"/></a>
                    <?php

                }
                ?>
            </td>
            <td align="center" valign="middle">
                <?php
                if(@$_SESSION['grades'] == "高级会员"){
                    if($_POST['m_type'] == "audio"){
                        ?>
                        <a href="download.php?id=<?php echo $l_rst->fields[5] ?>&action=audio">
                            <img src="images/downall_icon.jpg" height="20" width="20" border="0"/></a>
                        <?php
                    }elseif($_POST['m_type'] == "video"){
                        ?>
                        <a href="download.php?id=<?php echo $l_rst->fields[5] ?>&action=video">
                            <img src="images/downall_icon.jpg" height="20" width="20" border="0"/></a>
                        <?php
                    }}
                ?>
            </td>
            <td align="center" valign="middle"><a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_POST['m_type'] == "audio")?"intro":"v_intro");?>&id=<?php echo $l_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><img src="images/show_icon.jpg" height="20" width="20" border="0" alt="详细介绍" /></a></td>
        </tr>
        <?php
        $l_rst->movenext();
    }
    ?>
</table>