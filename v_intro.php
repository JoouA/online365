<?php
include "conn/conn.php";
?>
<link rel="stylesheet" href="css/style.css">
<body>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="567" height="26" align="center" valign="middle"><font style="font-size:13px; ">音乐介绍</font></td>
    </tr>
    <tr>
        <td>
            <table width="559" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="92">
                        <table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="402" align="center" valign="middle">
                                    <?php
                                    $sql="select * from tb_video where id=".$_GET['id'];
                                    $rst = $conn->execute($sql);
                                    if(!$rst->EOF){
                                        ?>
                                        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="15" colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="131" height="20" align="right" valign="middle">歌曲名:</td>
                                            <td width="269" height="20"><?php echo $rst->fields['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">发行方:</td>
                                            <td height="20"><?php echo $rst->fields['publisher']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">作者:</td>
                                            <td height="20"><?php echo $rst->fields['actor']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">作者类型:</td>
                                            <td height="20"><?php echo $rst->fields['actortype']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">作词:</td>
                                            <td height="20"><?php echo $rst->fields['ci']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">作曲:</td>
                                            <td height="20"><?php echo $rst->fields['qu']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">语种:</td>
                                            <td height="20"><?php echo $rst->fields['languages']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">音乐类型:</td>
                                            <td height="20"><?php echo $rst->fields['style']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">发行地区:</td>
                                            <td height="20"><?php echo $rst->fields['froms']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">发行时间:</td>
                                            <td height="20"><?php echo $rst->fields['publishTime']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">评论:</td>
                                            <td height="20">
                                                <textarea name="textarea" cols="40" rows="5" readonly="readonly"><?php echo $rst->fields['remark']; ?></textarea>			    </td>
                                        </tr>

                                        <tr>
                                            <td height="30" colspan="2" align="center" valign="middle">
                                                <?php
                                                if(isset($_SESSION['name'])){
                                                    ?>
                                                    <input name="Submit" type="button" value="播放" onclick="javascript:Wopen=open('listen.php?id=<?php echo $rst->fields['id']; ?>','','height=70,width=665,scrollbars=no');">
                                                    <?php
                                                }if(isset($_SESSION['name'])){
                                                    ?>
                                                    <input name="Submit" type="button" <?php  if ($_SESSION['grade']=="普通会员") echo "hidden"; ?> value="下载"  onClick="javascript:Wopen=location='download.php?action=video&id=<?php echo $rst->fields['id']; ?>';">
                                                    <?php
                                                }
                                                ?>
                                                <input name="Submit2" type="button" value="关闭" class="submit" onClick="javascript:top.window.close();"></td>
                                        </tr>
                                        </table>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>