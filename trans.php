<?php
include "conn/conn.php";
include "inc/func.php";
$types = htmlspecialchars(trim(@$_GET['types']))?htmlspecialchars(trim(@$_GET['types'])):'Audio';
?>
<div align="center">
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="567" height="26" valign="bottom"><div align="center"><font style="color:#000000; font-size:13px; ">上传清单</font> </td>
    </tr>
    <tr>
        <td>
            <table width="559" height="94" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="92">
                        <table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="402" valign="top">
                                    <table width="400" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="2" valign="top">
                                                <table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="402" valign="top">
                                                            <table width="400" height="480" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td height="15" colspan="2">&nbsp;</td>
                                                                </tr>
                                                                <form action="trans_chk.php" method="post" name="list" enctype="multipart/form-data"  >
                                                                    <tr>
                                                                        <td height="20" align="right" valign="middle">信息类型：</td>
                                                                        <td height="20">
                                                                            <select name="types" onchange="window.location='operation.php?action=trans&types=' + this.value;">
                                                                                <option value="Audio" <?php if ($types=="Audio") echo "selected"; ?>>视频</option>
                                                                                <option value="Video" <?php if (($types=="Video") || ($types=="")) echo "selected"; ?>>音频</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="20" align="right" valign="top">图片信息</td>
                                                                        <td height="20" valign="top">
                                                                            <input name="picture" type="file">
                                                                            <br /><font color="red">(上传文件大小不能超过700K)</font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="20" align="right" valign="top">上传数据</td>
                                                                        <td height="20" valign="top">
                                                                            <input name="address" type="file">
                                                                            <br /><font color="red">(音频文件不能超过50M,视频文件不能超过300M)</font></td>
                                                                    </tr>
                                                                    <?php
                                                                    switch ($types){
                                                                        case "Audio":
                                                                            Audio();
                                                                            break;
                                                                        case "Video":
                                                                            Video();
                                                                            break;
                                                                        default:
                                                                            Video();
                                                                            break;
                                                                    }
                                                                    ?>
                                                                    <tr>
                                                                        <td height="30" colspan="2">
                                                                            <div align="center">
                                                                                <input name="Submit" type="submit"  value="添加">
                                                                                (*是必填项)
                                                                                <input name="Submit2" type="button"  value="返回" onClick="javascript:top.window.close()">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </form>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>