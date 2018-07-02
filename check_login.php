<?php
session_start();
if($_SESSION[username]==""){
	echo "<script>alert('对不起，本博客网站需要进行用户登录来验证!');window.location.href='main.php';</script>";
	exit();
}
?>
