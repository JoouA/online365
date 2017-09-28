<?php
    if (empty($_SESSION['m_id'])){
        echo "<script type='text/javascript'>alert('非法登录'); window.close();</script>";
        exit();
    }
?>