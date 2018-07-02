<?php 
	//第一步 获得提交数据
	if (isset($_POST['content'])) {
		$title=$_POST['title'];
		$author=$_POST['author'];
		$content=$_POST['content'];
		$ip=$_SERVER['REMOTE_ADDR'];

		//连接数据库
		$conn=mysqli_connect("localhost","root","","wearebolg");
		if (mysqli_errno($conn)) {
			echo mysqli_connect_errno();
			exit("数据库连接错误");
		}else{
			
		}
		//var_dump($conn);
		//设置字符集
		mysqli_set_charset($conn,"utf8");

		//准备SQL语句
		$sql="insert into tb_article(title,author,content) values ('".$title."','".$author."','".$content."')";
		//echo $sql;

		//5 执行sql
		$result=mysqli_query($conn,$sql);
		if ($result) {
			echo "发表成功";
		}else{
			echo "失败";
		}
		echo "<meta http-equiv='Refresh' content='0.6,url=addweibo.php'>";
	}
 ?>