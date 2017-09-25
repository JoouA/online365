<?php
    if (empty($_SESSION['m_id'])&&empty($_SESSION['m_type'])){
        echo "<script type='text/javascript'>alert('非法登录'); window.close();</script>";
        exit();
    }
?>