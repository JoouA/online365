
<!--最新影视-->
<table width="605px" border="0" cellspacing="0" cellpadding="0" class="right_table">
    <tr>
        <td height="30px" colspan="2" align="center" valign="middle" background="images/new_file.jpg">
            <div align="right"><a href="list.php?action=audio&style=new" style="font-family:'宋体'; color:#FFFFFF;">>>>更多</a></div>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" width="50%">
            <!--显示影视资料 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                <tr>
                    <td width="150px" align="center" valign="middle">
                        <img name="news" src="" width="130px" height="150px" alt="" border="3" style=" border-color:#CCCCCC; margin-top:15px; margin-left:15px; margin-bottom:15px; margin-right:15px;" />
                    </td>
                    <td align="center" valign="middle">
                        <table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="25px" colspan="2">所示</td>
                            </tr>
                            <tr>
                                <td width="40%" height="25" align="right" valign="middle">类型：</td>
                                <td width="62%"><div>fff</div></td>
                            </tr>
                            <tr>
                                <td height="25px" align="right" valign="middle">主演：</td>
                                <td><div style=" width:50px; height:15px; ">张学友</div></td>
                            </tr>
                            <tr>
                                <td height="25px" align="right" valign="middle">导演：</td>
                                <td>王家卫</td>
                            </tr>
                            <tr>
                                <td height="25px" align="right" valign="middle">制片：</td>
                                <td>北京制片厂</td>
                            </tr>
                            <tr>
                                <td height="25px" colspan="2" align="center" valign="middle">
                                    <?php if(@$_SESSION['name']!=""){ ?>
                                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=see&id=<?php echo 12; ?>','','height=700,width=665,scrollbars=no');">
                                            <img src="images/online_icon.jpg" width="21" height="20" border="0" alt="在线观看" />
                                        </a>
                                    <?php }if(@$_SESSION['name']!="" && $_SESSION['grades']=="高级会员") { ?>
                                        <a href="download.php?id=<?php echo 1; ?>&action=audio">
                                            <img src="images/down.jpg" width="20" height="18" border=0 alt="下载" />
                                        </a><?php  } ?>&nbsp;
                                    <a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo 1; ?>','','height=700,width=665,scrollbars=no');">
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
                <tr>
                    <td width="25%" align="right" valign="middle">
                        <a href="list.php?action=audio&style=<?php echo urlencode('12'); ?>">【<?php echo 1; ?>】</a>
                    </td>
                    <td width="75%" align="left" valign="middle" style=" text-indent:20px; ">
                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo 2; ?>','','height=700,width=665,scrollbars=no');">
                            <?php echo "1213"; ?>
                        </a>
                    </td>
                </tr>
            </table>
            <!--------------------->
        </td>
        <td width="18px" align="left" valign="top">&nbsp;</td>
        <td width="295px" align="center" valign="top">
            <!-- 音乐特区 -->
            <table width="295px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="30px" colspan="2" background="images/music_show.jpg">
                        <div align="right"><a href="" style="font-family:'宋体'; color:#FFFFFF;">>>>更多</a></div>
                    </td>
                </tr>
                <tr>
                    <td width="25%" align="right" valign="middle">
                        <a href="list.php?action=video&style=<?php echo urlencode('123'); ?>">【<?php echo '1234'; ?>】</a>
                    </td>
                    <td width="75%" align="left" valign="middle">
                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=v_intro&id=<?php echo 'dsds'; ?>','','height=700,width=665,scrollbars=no');">
                            <?php echo 'dsds'; ?>
                        </a>
                    </td>
                </tr>
            </table>
            <!----------------------------->
        </td>
    </tr>
</table>