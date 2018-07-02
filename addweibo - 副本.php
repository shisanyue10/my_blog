<?php 
include "database.php";
session_start();
	error_reporting(0); 
	$author=$_SESSION[username];
?>
<!DOCTYPE html>
<html>
<head>
	<title>个人首页</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bokemain.css">
	<style type="text/css">
		.content table{
			width: 757px;
			table-layout: fixed;
			/*margin: auto;*/
		}
		.content table input[type="text"]{
			width: 40%;
			font-size: 25px;
			float: left;
		}
		.content table td{
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
			font-size: 20px;
			color: white;
		}
		.font{
			width: 685px;
			height: 300px;
			font-size: 25px;
			color: #F00;
		}
	</style>
</head>
<body>
	<div class="logotop"></div>
	<div class="menu">
		<table>
			<tr>
				<td width="150px"><a href="enterMain.php">欢迎您：<?php echo $author?></a></td>
				<td><a href="main.php">博客首页
				</a> 
				</td>
				<td><a href="addweibo.php">添加博客</a></td>
				<td><a href="selectweibo.php">查询博客</a></td>
				<td><a href="myimg.php">我的相册</a></td>
				<td><a href="safe.php">退出登录 </a></td>
			</tr>
		</table>
	</div> 
    <div class="content">
		<form action="add.php" method="post">
			<table>
				<caption><b class="caption">添加博客文章</b></caption>
				<tr>
					<td width="100px">博客主题：</td>
					<td>
						<input type="text" name="title">
					</td>
				</tr>
				<tr>
					<td width="100px">博客作者：</td>
					<td>
						<input type="text" name="author">
					</td>
				</tr>
				<tr>
					<td width="100px"s>博客内容：</td>
					<td>
						<textarea class="font" cols="90" rows="25" name="content">
						</textarea>
					</td>
				</tr>
				<tr>
				<td colspan="2" id="buttonarea">
					<input type="submit" value="发表">
					<input type="reset" value="重置">
				</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="bottom">
		<center>
			<tr>
				<td><a href="">博客首页</a></td>
				<td><a href="selectweibo.php">博客个人首页</a></td>
			</tr>	
		</center>
	</div>
</body>
</html>