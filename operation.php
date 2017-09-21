<?php
    session_start();
    $action = $_GET['action']? $_GET['action']:'';
?>
<html>
<head>
    <meta charset="UTF-8" content="text/html">
    <script type="text/javascript" src=""></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <center>
        <table>
            <tr>
                <td width="665px" height="164px" style="background-image: url(images/ball.jpg);" >&nbsp;</td>
            </tr>
        </table>
    </center>
    <?php
        switch ($action) {
            case 'reg':     //register
                include_once "reg.php";
                break;
            case 's_music':     //see the music system
                include_once "s_music.php";
                break;
            case 'mod_vip':   //modify info
                include_once "mod_vip.php";
                break;
            case 'intro':   //video intro
                ?>
                <iframe src="intro.php?id=<? $_GET['id'] ?>" width="665px" height="700px" scrolling="no"></iframe>
                <?php
                break;
            case 'v_intro':     // vocie intro
                ?>
                <iframe src="v_intro.php?id=<? $_GET['id'] ?>" width="665px" height="700px" scrolling="no"></iframe>
                <?php
                break;
            case 'call';
                include_once "call.php";
                break;
            case 'trans':
                include_once "trans.php";
                break;
            case 'found_pwd':
                include_once "found_pwd.php";
                break;
            case 'search':
                include_once "search.php";
                break;
            case 'see':
                ?>
                <iframe src="see.php?id=<? $_GET['id'] ?>" width="665px" height="530px" scrolling="no" frameborder="0"
                        align="middle"></iframe>
                <?php
                break;
            case 'listen':
                ?>
                <iframe src="listen.php?id=<? $_GET['id'] ?>" width="665px" height="530px" scrolling="no"
                        frameborder="0" align="middle"></iframe>
                <?php
                break;
            case 'give':
                ?>
                <iframe src="give.php?id=<? $_GET['id'] ?>" width="665px" height="530px" scrolling="no" frameborder="0"
                        align="middle"></iframe>
                <?php
                break;
            case 'dotlisten':
                ?>
                <iframe src="dotlisten.php?id=<? $_GET['id'] ?>&name=<? $_GET['name'] ?>" width="665px" height="530px"
                        scrolling="no" frameborder="0" align="middle"></iframe>
                <?php
                break;
            default:
                break;
        }
    ?>
</body>
</html>