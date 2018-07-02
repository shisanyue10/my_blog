 <?php 
	include "database.php";
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bokemain.css">
	<style type="text/css">
		table td{
		}
		.title{
			font-size: 35px;
		}
		.tt{
			font-size: 20px;
			width: 757px;
		}
		.nei{
			font-size: 25px;
		}
	</style>
</head>
<body>
	<div class="content">
		<table>
			<?php
				if (isset($_GET['id'])) {
				$id=$_GET['id'];
				$arr=querybyid($id);
				if ($arr) {
					foreach ($arr as $key => $value) {
						echo "<tr class='title'>"."<td>".$value['title']."</td></tr>"."<br/>";
						echo "<tr class='tt'>"."<td>".$value['author']."</td>"."</tr><br/>";
						echo "<tr class='tt'>"."<td>".$value['now']."</td>"."</tr><br/>";					
						echo "<tr class='nei'>"."<td>".$value['content']."</td></tr>"."<br/>";
					}
				}
				}
 			?>		
		</table>
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