<?php
    /**
     * 登录后才能操作
     */
    if(!isset($_SESSION['id']) || !isset($_SESSION['name'])){
        echo "<meta charset='utf-8' content='text/html'>";
        echo "<script type='text/javascript'>alert('请登录！');window.close();</script>";
    }
?>