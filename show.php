<?php
    include_once "conn/conn.php";
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8" content="text/html">
    <script type="text/javascript" src="js/chk.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
<div align="center">
    <?php
    include "top.php";			//banner
    ?>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="265" align="center" valign="top">
                <?php
                include "left.php";			//登录、搜索框
                ?>
            </td>
            <td align="center" valign="top">
                <?php
                    if (@$_POST['action'] == 'l_found') {
                        include_once "normal_show.php";
                    }elseif ($_GET['action']== 'high'){
                        include_once "high_show.php";
                    }
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>