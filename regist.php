<?php 
	session_start();
	include "conn.php";
	error_reporting(0); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>wearebolg</title>
</head>
<link href="CSS/style.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="size.css">
<script src="JS/check.js" language="javascript">
</script>
<body>
	<table width="757" border="0" align="center" cellpadding="0" cellspacing="0" style="border-right:1px solid  #000000">
		<tr align="right" valign="top">
			<td height="202" colspan="2" background="images/head.jpg">

				<table width="100%" height="202"  border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="51" align="right"><br><br><br><br><br><br>
							<table width="262" border="0" cellspacing="0" cellpadding="0">
								<tr align="left">

									<td width="26" height="20"><a href="main.php"></a></td>
									<td width="51" class="word_white"><a href="main.php"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
									<td width="67"><a href="my_main.php"><span  style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
									<td width="55"><a href="<?php echo (!isset($_SESSION[username])?'Regpro.php':'safe.php'); ?>"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
									<td width="23">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="56" align="right"><p>&nbsp;</p></td>
					</tr>
					<tr>
						<form name="form" method="post" action="checkuser.php">
							 <td height="20" valign="baseline">
							 	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
							 		<tr>
							 			<td width="55%" height="20" align="center" valign="baseline">&nbsp;</td>
							 			<td width="45%" align="left" valign="baseline" style="text-indent:10px;">
							 				<?php 
							 					if (!isset($_SESSION[username])) {
							 				 ?>
							 				 用户名：<input  name=txt_user size="10">
							 				 密码：<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">&nbsp;&nbsp;&nbsp;

							 			<input style="FONT-SIZE: 9pt"  type="submit" value="登录">&nbsp;
										 				 <?php }else{ ?>
										 				 <font size="5" color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wearebolg欢迎您<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前时间：<font color="red"><?php echo date("Y-m-d l"); ?></font>
										 				 <?php } ?>
										 			</td>
										 		</tr><br>
									<tr>
							 					<!-- <td width="1%" align="center" valign="baseline">&nbsp;</td> -->
							 		</tr>
							 	</table>
							 </td>
						</form>
					</tr>
				</table>
			</td>
		</tr>
		<tr height="10"></tr>
		<tr>		
			<?php 
				require_once 'tb_user.php';
			 ?>
		</tr>
		<tr height="20"></tr>
	</table>
	<br>
	<?php
		require_once 'footer.php';
	?>
</body>
</html>