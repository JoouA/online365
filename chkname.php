<meta charset="UTF-8">
<?php
 include_once "conn/conn.php";
 $name = $_GET['name'];

 $sql = "select * from tb_account WHERE `name`='$name'";
 $res = $conn->execute($sql);
 if (!$res->EOF){
     echo "用户名已存在";
     exit();
 }else{
     echo "用户名可以用";
     exit();
 }