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
    <div align="center">
        <table>
            <tr>
                <td width="665px" height="164px" style="background-image: url(images/ball.jpg);" >&nbsp;</td>
            </tr>
        </table>
    </div>
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
                include_once "intro.php";
                break;
            case 'v_intro':     // vocie intro
                 include_once "v_intro.php";
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
                include_once "see.php";
                ?>
<!--                <iframe src="see.php?id=--><?// $_GET['id'] ?><!--" width="665px" height="530px" scrolling="no" frameborder="0" align="middle"></iframe>-->
                <?php
                break;
            case 'listen':
                include_once "listen.php";
                break;
            case 'give':
                include_once "give.php";
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