<table width="265px" height="205px" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2" align="center" class="l_td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2" align="center" class="l_td">&nbsp;
            <a href="#" style="color:#000000 " onClick="javascript:Wopen=open('operation.php?action=s_music','µã¸èÏµÍ³','height=500,width=665,scrollbars=no');" class="b">
                数量
            </a>
        </td>
    </tr>
    <tr>
        <td width="100px" align="right" valign="middle" class="l_td">用户名</td>
        <td align="left" valign="middle" class="l_td"><?php echo $_SESSION['name']; ?></td>
    </tr>
    <tr>
        <td width="100px" align="right" valign="middle" class="l_td">等级</td>
        <td align="left" valign="middle" class="l_td"><?php echo $_SESSION['grades']; ?></td>
    </tr>
    <tr>
        <td width="100px" align="right" valign="middle" class="l_td">ÉÏ´«ÊýÁ¿£º</td>
        <td align="left" valign="middle" class="l_td"><?php echo $_SESSION['counts']; ?></td>
    </tr>
    <form name="form1" method="post" action="">
        <tr>
            <td colspan="2" align="center" valign="middle" class="l_td">
                <input name="Submit" type="button" id="mod_vip" value="»áÔ±×ÊÁÏÐÞ¸Ä"
                       onClick="javascript:Wopen=open('operation.php?action=mod_vip','','height=500,width=665,scrollbars=no');">
                <input type="button" name="logout" id="logout" value="注销" onclick="return l_chk();" class="submit" />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="middle" class="l_td">&nbsp;</td>
        </tr>
    </form>
</table>