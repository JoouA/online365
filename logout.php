<?php
    session_start();
    if (!empty($_SESSION['name'])){
        session_destroy();
        header('location: index.php');
    }else{
        echo "<meta charset='UTF-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('非法操作');window.location.href='index.php';</script>";
    }
?>


