<table width="265px" border="0" cellpadding="0" cellspacing="0" class="left_table">
    <tr>
        <td align="center" valign="top">
            <?php
                if(@isset($_SESSION['id'])&& isset($_SESSION['name'])){
                    include 'message.php';
                }else{
                    include 'login.php';
                }
            ?>
        </td>
    </tr>
</table>

<table width="265px" border="0" cellspacing="0" cellpadding="0" class="left_table">
    <tr>
        <td align="center" valign="top">
            <?php  include 'found.php';   ?>
        </td>
    </tr>
</table>

<table width="265px" border="0" cellpadding="0" cellspacing="0" class="left_table">
    <tr>
        <td align="center" valign="top">
            <?php include 'audio.php';     ?>
        </td>
    </tr>
</table>

<table width="265px" border="0" cellpadding="0" cellspacing="0" class="left_table">
    <tr>
        <td align="center" valign="top">
            <?php include 'video.php';     ?>
        </td>
    </tr>
</table>

