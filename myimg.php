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
		.readimg{
			margin: auto;
			text-align: center;
			background-image: url(img/abd.jpg);

		}
		.addimg{
			height: 60px;
			width: 757px;
			margin: auto;
			background-image: url(img/abd.jpg);
		}
		.addimg input{
			font-size: 20px;
			margin: auto;
		}
		.addimg h{
			font-size: 25px;
			position: center;
		}
	</style>
	
</head>
<body>
	<div class="logotop"></div>
	<div class="menu">
		<table>
			<tr>
				<td width="150px"><a href="enterMain.php">欢迎您：<?php echo $author;?></a></td>
				<td><a href="main.php">博客首页
				</a> 
				</td>
				<td><a href="addweibo.php">添加博客</a></td>
				<td><a href="selectweibo.php?author={$value['author']}">查询博客</a></td>
				<td><a href="myimg.php">我的相册</a></td>
				<td><a href="">退出登录 </a></td>
			</tr>
		</table>
	</div> 
	<div class="addimg">
		<h>我的相册</h>
		<form action="addimg.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" value="选择图片">
			<input type="submit" value="添加图片">
		</form>
	</div>
    <div class="readimg"  style="width:757px;height:700px; overflow-y:scroll;">
		
			<?php
			$arr=readimg($author);
			if ($arr) {
				foreach ($arr as $key => $value) {
					echo "<td><label>";
					echo "<img src='".$value['file']."',width='200px' height='200px'>";
					echo "</label></td>";
				}
		    }	
		?>
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
