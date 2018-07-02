<?php

	include "database.php";
	session_start();
	error_reporting(0); 
	$author=$_SESSION[username];
?>
<!DOCTYPE html>
<html>
<head>
	<title>wearebolg</title>
	<bgsound src=music.mp3 loop="-1">
	<link rel="stylesheet" href="CSS/bootstrap-grid.min.css">
	<link rel="stylesheet" href="dist/zoomify.min.css">
	<link rel="stylesheet" href="CSS/stylejsa.css">	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="dist/zoomify.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bokemain.css">
	<style type="text/css">
		.content table{
			
		}
		.content table td{
			font-size: 16px;
			height: 60px;
			
		}
		.name{
			width: 150px;
		}
	</style>
</head>
<link href="CSS/style.css" rel="stylesheet"/>
<script src="JS/check.js" language="javascript">
</script>
<body>
	
	<table width="757" border="0" align="center" cellpadding="0" cellspacing="0" style="border-right:1px solid  #ffffff">
		<tr align="right" valign="top" style="margin-bottom: 10px;">
			<td height="180" colspan="2" background="images/head.jpg">

				<table width="100%" height="200"  border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="51" align="right"><br><br><br><br><br>
							<table width="262" border="0" cellspacing="0" cellpadding="0">
								<tr align="left">

									<td width="26" height="20"><a href="main.php"></a></td>
									<td width="51" class="word_white"><a href="main.php"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
									<td width="67"><a href="my_main.php"><span  style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
									<td width="55"><a href="<?php echo (!isset($_SESSION[username])?'regist.php':'safe.php'); ?>"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
									<td width="23">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="56" align="left">
							
						</td>
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
							 				 密码：<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">&nbsp;

							 			<input style="FONT-SIZE: 9pt;width: 60px;background-color:#74d986 ;border: 0px;"  type="submit" value="登录">&nbsp;
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
		<tr style="height: 3px;"></tr>
		<tr>		
			<td width="521" align="center" >
				<table width="100%" style="height: 590px;"  border="0" cellpadding="0" cellspacing="0" table bgcolor=#def1f5>
					<tr>
						<td>
							<table>
								<tr style="height: 60px;">
									<td style="width: 60px;"></td>
									<td  style="width:100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="my_main.php">个人信息</a></td>
									<td style="width:100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="main.php">博客首页</a> </td>
									<td style="width: 100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="addweibo.php?author=".$author.">添加博客</a></td>

									<td style="width: 100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="my_myimg.php?author=".$author.">我的相册</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
					          <td height="522" align="top" style="width: 520px;">
					          	
				<div class="content" style="width: 500px;">      	
				<table style="width: 500px;">
				<caption><b class="caption">个人博客信息</b></caption>
				<?php 
				//获得查询结果

					$arr=query("SELECT * FROM tb_user where regname='".$author."'");
					if ($arr) {
						foreach ($arr as $key => $value) {
							echo "<tr>";
							echo "<td class='name'>昵称:</td>";
							echo "<td>".$value['regname']."</td>";
							echo "</tr>";

							
							echo "<tr>";
							echo "<td class='name'>真实姓名:</td>";
							echo "<td>".$value['regrealname']."</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td class='name'>生日:</td>";
							echo "<td>".$value['regbirthday']."</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td class='name'>邮箱:</td>";
							echo "<td>".$value['regemail']."</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td class='name'>居住城市:</td>";
							echo "<td>".$value['regcity']."</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td class='name'>qq:</td>";
							echo "<td>".$value['regqq']."</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td class='name'>个性签名</td>";
							echo "<td>".$value['regsign']."</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td class='name'>自我介绍</td>";
							echo "<td>".$value['regintroduce']."</td>";
							echo "</tr>";
						}
					}
			 ?>
				
			</table>
			</div>		        
					        
					        </td>
					</tr>

					<tr>
						<td height="50">&nbsp;</td>
					</tr>
					<tr>
						<td style="height: 60px;">&nbsp;</td>
					</tr>
					
				</table>
			</td>
			
			<td width="236" height="560" background="images/head.jpg">
				<?php require_once 'left.php'?>
			</td>

		</tr>
	</table>
	<?php
		require_once 'footer.php';
	?>





</body>
</html>