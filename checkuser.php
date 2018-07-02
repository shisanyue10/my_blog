<?php
session_start();
include "conn.php";
error_reporting(0); 
$name=$_POST[txt_user];
$pwd=md5($_POST[txt_pwd]);
$sql=mysql_query("select * from tb_user where regname='".$name."' and regpwd='".$pwd."'");
$result=mysql_fetch_array($sql);
if($result!=""){
$_SESSION[fig]=$result[fig];
$_SESSION[username]=$name;
?>
<script language="javascript">
	alert("登录成功");
	window.location.href="main.php";
</script>
<?php
}else{
?>
<script language="javascript">
	alert("对不起，您输入的用户名或密码不正确，请重新输入!");window.location.href="main.php";
</script>
<?php
	}
?>