<?php
require_once "inc/chec.php";
require_once "conn/conn.php";
?>
<link rel="stylesheet" href="css/style.css">
<body>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="567" height="26" align="center" valign="middle"><font style="font-size:13px; ">歌 曲  介 绍</font></td>
    </tr>
    <tr>
        <td>
            <table width="559" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="92">
                        <table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="402" align="center" valign="middle">
                                    <?php	$sql="select * from tb_video where id=".$_GET['id'];
                                    $rst = $conn->execute($sql);
                                    if(!$rst->EOF){
                                        ?>
                                        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="15" colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="131" height="20" align="right" valign="middle">名称：</td>
                                            <td width="269" height="20"><?php echo $rst->fields['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">发行商：</td>
                                            <td height="20"><?php echo $rst->fields['publisher']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">歌手：</td>
                                            <td height="20"><?php echo $rst->fields['actor']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">演唱形式：</td>
                                            <td height="20"><?php echo $rst->fields[6]; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">作词：</td>
                                            <td height="20"><?php echo $rst->fields['ci']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">作曲：</td>
                                            <td height="20"><?php echo $rst->fields['qu']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">语言：</td>
                                            <td height="20"><?php echo $rst->fields['languages']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">音乐类型：</td>
                                            <td height="20"><?php echo $rst->fields['style']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">发行国家：</td>
                                            <td height="20"><?php echo $rst->fields['languages']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">发行时间：</td>
                                            <td height="20"><?php echo $rst->fields['publishTime']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="20" align="right" valign="middle">简要介绍：</td>
                                            <td height="20">
                                                <textarea name="textarea" cols="40" rows="5" readonly="readonly"><?php echo $rst->fields['remark']; ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="30" colspan="2" align="center" valign="middle">
                                                <input name="Submit" type="button" value="  播  放  " onClick="javascript:Wopen=open('listen.php?id=<?php echo $rst->fields['id']; ?>','','height=60,width=665,scrollbars=no');">
                                                <input name="Submit" type="button" value="  下  载  "  onClick="javascript:Wopen=location='download.php?action=video&id=<?php echo $rst->fields['id']; ?>';">
                                                <input name="Submit2" type="button" value="  返  回  " class="submit" onclick="javascript:top.window.close();"></td>
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