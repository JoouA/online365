<?php
include "conn/conn.php";
?>

<table width="558px" height="110px" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="567px" height="26px" align="center" valign="middle">点 歌 信 息 查 看 </td>
    </tr>
    <tr>
        <td>
            <table width="559px" height="320px" align="center" cellpadding="0" cellspacing="0" bordercolor="#9caab5">
                <tr>
                    <td height="318px">
                        <table width="404px" height="330px" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="402px" height="312px" valign="bottom">
                                    <table width="400px" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="400px" height="300px" valign="top">
                                                <table width="400px" border="0" cellspacing="0" cellpadding="0">
                                                <tr valign="top">
                                                    <td height="15px" colspan="4">&nbsp;</td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="100px" height="23px">歌曲名称：</td>
                                                    <td width="185px" height="23px">
                                                        <a href="operation.php?action=dotlisten&id=1&name=text; ?>"><?php echo 'text'; ?></a>
                                                    </td>
                                                    <td width="75px" height="23px">点歌人：</td>
                                                    <td width="103px" height="23px"></td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="100px">祝语：</td>
                                                    <td height="55px" colspan="3">
                                                        <textarea name="textarea" cols="40" rows="3" ></textarea>
                                                    </td>
                                                </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="30px">
                                                <input name="Submit2" type="button" value="  返  回  "  onclick="javascript:top.window.close()">
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