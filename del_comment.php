<?php       
	session_start();  
	error_reporting(0);
	include "conn.php";
    $sql="delete from tb_filecomment where id=".$_GET[comment_id];
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('删除成功!');location='$_SERVER[HTTP_REFERER]';</script>";
	}
	else{	
		echo "<script>alert('删除操作失败!');history.go(-1);</script>";
	}	
?> 


