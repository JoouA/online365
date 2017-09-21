<table width="886px" border="0" cellspacing="0" cellpadding="0">

    <tr>
        <td height="54px" colspan="2" align="center" valign="top" background="images/top.jpg">&nbsp;</td>
    </tr>

    <tr>
        <td height="37" colspan="2" align="center" valign="top">
            <!--导航栏-->
            <table width="100%" height="37px" cellpadding="0" cellspacing="0" background="images/navigs.jpg">
                <tr>
                    <td>&nbsp;</td>
                    <td width="126px" align="center" valign="middle"">
                        <a href="index.php"><img src="images/2.jpg" alt="2" style="width: 126px"></a>
                    </td>
                    <td width="126px" align="center" valign="middle"">
                        <a href="list.php?action=audio"><img src="images/3.jpg" alt="3" style="width: 126px"></a>
                    </td>
                    <td width="126px" align="center" valign="middle"">
                        <a href="list.php?action=video"><img src="images/4.jpg" alt="4" style="width: 126px"></a>
                    </td>
                    <?php  if(@$_SESSION['name'] != ''){ $href='list.php?action=dot'; }else{ $href='#'; } ?>
                    <td width="126px" align="center" valign="middle"">
                        <a href="<?php echo $href; ?>">
                            <img src="images/5.jpg" alt="5" style="width: 126px">
                        </a>
                    </td>

                    <td width="126px" align="center" valign="middle"">
                        <a href="#" <?php if(@$_SESSION['name']!=''){?>
                           onclick="javascript:Wopen=open('operation.php?action=trans','','height=700,width=665,scrollbars=no');" <?php } ?>>
                            <img src="images/6.jpg" alt="6" style="width: 126px">
                        </a>
                    </td>

                    <td width="126px" align="center" valign="middle"">
                        <a href="#" onclick="javascript:Wopen=open('operation.php?action=call','','height=700,width=665,scrollbars=yes');">
                            <img src="images/7.jpg" alt="7" style="width: 126px">
                        </a>
                    </td>
<!--                    onmouseover="this.style.backgroundImage='url(images/8.jpg)'" onmouseout="this.style.backgroundImage=''-->

                    <td width="126px" align="center" valign="middle" ">
                        <a href="#" <?php if (@!empty($_SESSION['name'])){ echo "onclick=\"return logout();\""; }?>>
                            <img src="images/8.jpg" alt="8" style="width: 126px">
                        </a>
                    </td>
                    <td>&nbsp;</td>
                </tr>

            </table>
            <!-- ----------------------------------- -->

        </td>

    </tr>
<!--     滚动条-->
    <tr>
        <td height="13px" colspan="2" align="center" valign="bottom" background="images/1ine_1.jpg">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="886px" height="12px" align="bottom">
                <param name="movie" value="images/00.swf" />
                <param name="quality" value="high" />
                <embed src="images/00.swf" width="886" height="12" align="bottom" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
            </object>
        </td>
    </tr>
<!--    banner图-->
    <tr>
        <td height="96px" colspan="2" align="center" valign="top" background="images/c_banner.jpg">&nbsp;</td>
    </tr>
<!--    滚动条-->
    <tr>
        <td height="12px" colspan="2" align="center" valign="bottom" background="images/1ine_1.jpg">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="886px" height="12px">
                <param name="movie" value="images/01.swf" />
                <param name="quality" value="high" />
                <embed src="images/01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="886px" height="12px"></embed>
            </object>
        </td>
    </tr>

</table>