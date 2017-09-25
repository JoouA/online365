<?php
include "../ado/adodb.inc.php";

$conn = ADONewConnection('mysql');

$conn->PConnect('localhost','root','root','db_online');

$conn->execute('set names utf8');
?>