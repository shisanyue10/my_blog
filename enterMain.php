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
		}
		.content table td{
			font-size: 30px;
			height: 60px;
			
		}
		.name{
			width: 150px;
		}
	</style>
</head>
<body>
	<div class="logotop">
		
	</div>
	<div class="menu">
		<table>
			<tr>
				<td width="150px"><a href="enterMain.php">欢迎您：<?php echo $_SESSION[username]; ?> </a></td>
				<td><a href="main.php">博客首页</a> 
				</td>
				<td><a href="addweibo.php?author=$author">添加博客</a></td>
				<td><a href="selectweibo.php?author=$author">查询博客</a></td>
				<td><a href="myimg.php?author=$author">我的相册</a></td>
				<td><a href="">退出登录 </a></td>
			</tr>
		</table>
	</div> 
	<div class="content" style="width:757px;height:700px; overflow-y:scroll;">
		<center>
			<table>
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
		</center>
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