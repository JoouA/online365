<?php
    include_once "conn/conn.php";
    $sqlStr = "select * from tb_audio WHERE bool='1' ORDER BY id DESC limit 0,4";
    $sqlStr1 = "select * from tb_audio ORDER BY id DESC limit 0,15";
    $sqlStr2 = "select * from tb_video ORDER BY id DESC limit 0,15";
?>
<!--最新影视-->
<table width="605px" border="0" cellspacing="0" cellpadding="0" class="right_table">
    <tr>
        <td height="30px" colspan="2" align="center" valign="middle" background="images/new_file.jpg">
            <div align="right"><a href="list.php?action=audio&style=new" style="font-family:'宋体'; color:#FFFFFF;">>>>更多</a></div>
        </td>
    </tr>
    <?php
        $l_rst = $conn->execute($sqlStr);
        while(!$l_rst->EOF){
    ?>
    <tr>
        <td align="center" valign="middle" width="50%">
            <!--显示影视资料 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="150px" align="center" valign="middle">
                        <img name="news" src="<? echo $l_rst->fields['picture']; ?>" width="130px" height="150px" alt="" border="3" style=" border-color:#CCCCCC; margin-top:15px; margin-left:15px; margin-bottom:15px; margin-right:15px;" />
                    </td>
                    <td align="center" valign="middle">
                        <table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="25px" colspan="2"><font style="font-size: large"><B>所示</B></font></td>
                            </tr>
                            <tr>
                                <td width="40%" height="25" align="right" valign="middle">类型：</td>
                                <td width="62%"><div><? echo $l_rst->fields['style']; ?></div></td>
                            </tr>
                            <tr>
                                <td height="25px" align="right" valign="middle">主演：</td>
                                <td><div style=" width:50px; height:15px; "><? echo $l_rst->fields['actor']; ?></div></td>
                            </tr>
                            <tr>
                                <td height="25px" align="right" valign="middle">导演：</td>
                                <td><?php echo $l_rst->fields['director']; ?></td>
                            </tr>
                            <tr>
                                <td height="25px" align="right" valign="middle">制片：</td>
                                <td><? echo $l_rst->fields['publisher'];?></td>
                            </tr>
                            <tr>
                                <td height="25px" colspan="2" align="center" valign="middle">
                                    <?php if(@$_SESSION['name']!=""){ ?>
                                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=see&id=<?php echo $l_rst->fields['id']; ?>','','height=700,width=665,scrollbars=no');">
                                            <img src="images/online_icon.jpg" width="21" height="20" border="0" alt="在线观看" />
                                        </a>
                                    <?php }if(@$_SESSION['name']!="" && $_SESSION['grade']=="高级会员") { ?>
                                        <a href="download.php?id=<?php echo $l_rst->fields['id']; ?>&action=audio">
                                            <img src="images/down.jpg" width="20" height="18" border=0 alt="下载" />
                                        </a><?php  } ?>&nbsp;
                                    <a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo $l_rst->fields['id']; ?>','','height=700,width=665,scrollbars=no');">
                                        <img src="images/show_icon.jpg" width="20" height="20" alt="介绍" border="0" />
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <?php
        $l_rst->MoveNext();  }
    ?>
</table>

<table width="608px" height="197px" border="0" cellpadding="0" cellspacing="0" class="right_table">
    <tr>
        <td width="295" align="left" valign="top">
            <!--影视大棚-->
            <table width="295px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2" height="30" background="images/file_show.jpg">
                        <div align="right">
                            <a href="list.php?action=audio" style="font-family:'宋体'; color:#FFFFFF;" >>>>更多</a>
                        </div>
                    </td>
                </tr>
                <?php
                    $l_rst1 = $conn->execute($sqlStr1);
                    while(!$l_rst1->EOF){
                ?>
                <tr>
                    <td width="25%" align="right" valign="middle">
                        <a href="list.php?action=audio&style=<?php echo urlencode($l_rst1->fields['style']); ?>">【<?php echo $l_rst1->fields['style']; ?>】</a>
                    </td>
                    <td width="75%" align="left" valign="middle" style=" text-indent:20px; ">
                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo $l_rst1->fields['id']; ?>','','height=700,width=665,scrollbars=no');">
                            <?php echo $l_rst1->fields['name']; ?>
                        </a>
                    </td>
                </tr>
                <?php
                    $l_rst1->MoveNext();
                    }
                ?>
            </table>
            <!--------------------->
        </td>
        <td width="18px" align="left" valign="top">&nbsp;</td>
        <td width="295px" align="center" valign="top">
            <!-- 音乐特区 -->
            <table width="295px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="30px" colspan="2" background="images/music_show.jpg">
                        <div align="right"><a href="list.php?action=video" style="font-family:'宋体'; color:#FFFFFF;">>>>更多</a></div>
                    </td>
                </tr>
                <?php
                $l_rst2 = $conn->execute($sqlStr2);
                while(!$l_rst2->EOF){
                ?>
                <tr>
                    <td width="30%" align="right" valign="middle">
                        <a href="list.php?action=video&style=<?php echo urlencode($l_rst2->fields['style']); ?>">【<?php echo $l_rst2->fields['style']; ?>】</a>
                    </td>
                    <td width="70%" align="left" valign="middle">
                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=v_intro&id=<?php echo $l_rst2->fields['id']; ?>','','height=700,width=665,scrollbars=no');">
                            <?php echo $l_rst2->fields['name']; ?>
                        </a>
                    </td>
                </tr>
                    <?php
                    $l_rst2->MoveNext();
                }
                ?>
            </table>
            <!----------------------------->
        </td>
    </tr>
</table>