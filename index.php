<?php
    session_start();
?>
<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>online影视</title>
    <script type="text/javascript" src="js/chk.js"></script>
    <script type="text/javascript" src="js/href.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
        <?php include_once "top.php";  //banner ?>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 265px;" align="center" valign="top">
                     <?php  include_once "left.php";  //登录搜索框 ?>
                </td>
                <td style="width: 605px" align="center" valign="top">
                      <?php include_once "main.php"; //主浏览区 ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>