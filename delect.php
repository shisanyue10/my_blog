<?php 
	include "database.php";
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$res=deleteRecorder($id);
		if ($res) {
			echo "删除成功";
		}else{
			echo "删除失败";
		}
	}
	echo "<meta http-equiv='Refresh' content='3,url=selectweibo.php'>";

 ?>