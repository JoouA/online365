<?php
if($_SESSION['m_type']=='super'){
    return true;
}else {
    if (empty($_SESSION['m_type']) || ($_SESSION['m_type'] != '音频目录管理员')) {
        echo "<script type='text/javascript'>alert('不能操作这个模块'); window.close();</script>";
        exit();
    }
}
?>