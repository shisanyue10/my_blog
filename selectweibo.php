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
			margin: auto;
		}
		.content table td{
			height: 40px;
			font-size: 20px;
		}
		.wr{
			position: absolute;
			top: 140px;
			left: 650px;
			width: 350px;
			height: 60px;
		}
		.wr h{
			font-size: 20px;
			color: white;
		} 
		.delete{
			text-align: right;
			font-size: 20px;
		}
		
	</style>
</head>
<body>
	<div class="logotop">
		<div class="wr">
		<h><b>这真是一个美好的瞬间令我心旷神怡</b></h>
			<?php

				/*echo "<tr>";
					$arr=query("SELECT * FROM tb_article where author='Tsoft'");
					if ($arr) {
						foreach ($arr as $key => $value) {
							
						}
					}
				echo "</tr>";*/
			 ?>
		</div>

	</div>
	<div class="menu">
		<table>
			<tr>
				<td width="150px"><a href="enterMain.php?author='.$author.'">欢迎您：<?php echo $author;?></a></td>
				<td><a href="main.php">博客首页
				</a> 
				</td>
				<td><a href="addweibo.php?author='.$author.'">添加博客</a></td>
				<td><a href="selectweibo.php?author='.$author.'">查询博客</a></td>
				<td><a href="myimg.php?author='.$author.'">我的相册</a></td>
				<td><a href="">退出登录 </a></td>
			</tr>
		</table>
	</div> 
	<div class="content">
		<div class="content" style="width:757px;height:700px; overflow-y:scroll;">
			
			
			<?php
				$arr=query("SELECT * FROM tb_article where author='".$author."'");
				if ($arr) {
					foreach ($arr as $key => $value) {
						echo "<table>";
						echo "<tr class='title'>"."<td><br><a href='detail.php?id={$value['id']}'>".$value['title']."</a></td></tr>"."<br/>";
						echo "<tr class='tt'>"."<td>".$value['author']."</td>"."</tr><br/>";
						echo "<tr class='tt'>"."<td>".$value['now']."</td>"."</tr><br/>";	
						$str=$value['content'];
										
						echo "<tr class='nei'>"."<td>".$value['content']."</td></tr>"."<br/>";
						echo "<tr class='delete'><td>"."<a href='delect.php?id={$value['id']}'>删除</a><br></td></tr>";
						echo "</table>";
						echo "<hr/>";
					}
				}
					
 			?>		
	</div>
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