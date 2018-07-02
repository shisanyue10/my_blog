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
									<td  style="width:110px;margin-left: 10px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="my_main.php"> &nbsp;个人信息</a></td>
									<td style="width:100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="main.php">博客首页</a> </td>
									<td style="width: 100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="addweibo.php?author=$author">添加博客</a></td>
									
									<td style="width: 100px;"><a style="FONT-SIZE: 17pt; COLOR: #95d974"; href="my_myimg.php?author=$author">我的相册</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
					          <td>
					          	
									    	
									<form action="add.php" method="post">
										<div>  
											<table >
												<caption><b class="caption">添加博客文章</b></caption>
												<tr>
													<td  style=" font-size: 15px;">&nbsp;博客主题：</td>
													<td>
														<input style="margin-left: 60px; width: 300px;" type="text" name="title">
													</td>
												</tr>
												<tr>
													<td style=" font-size: 15px;">&nbsp;博客作者：</td>
													<td>
														<input style="margin-left: 100px; width: 210px;text-align: center;" type="text" name="author" value="月三星">
													</td>
												</tr>
												<tr>
													<td style=" font-size: 15px;">&nbsp;博客内容：</td>
													<td>
														<textarea class="font" cols="60" rows="20" name="content">
														</textarea>
													</td>
												</tr>
												<tr>
												<td colspan="2" id="buttonarea">
													<input type="submit" value="发表" style="background-color: #74d986;border: 0px;margin-top: 10px; margin-left: 150px;">
													<input type="reset" value="重置" style="background-color: #74d986;border: 0px;">
												</td>
												</tr>
											</table>
										</div>		
							</form>
								        
					        
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