<?php
	include "database.php";
	session_start();
	error_reporting(0); 
	$author=$_SESSION[username];
	$uptypes=array("image/jpg","image/jpeg","imag/png","image/pjeg","image/gif","image/bmp","image/x-png");
	$files=$_FILES['file'];
	if ($files['size']>1024*1024*10) {
		echo "图片不能大于10M";
		echo "<meta http-equiv='REFRESH' CONTENT='1;URL=my_myimg.php";
		exit();
	}
	$ftype=$files["type"];
	if (!in_array($ftype, $uptypes)) {
		echo "上传的图片文件格式不正确";
		echo "<meta http-equiv='REFRESH' CONTENT='1;URL=my_myimg.php";
	}
	$fname=$files["tmp_name"];
	$image_info=getimagesize($fname);
	$name=$files["name"];
	$str_name=pathinfo($name);
	$extname=strtolower($str_name["extension"]);
	$upload_dir="pacture/";
	$file_name=date("YmdHis").rand(0,9999).".".$extname;
	$str_file=$upload_dir.$file_name;
	addimg($files,$str_file,$upload_dir,$author);
	echo "<meta http-equiv='Refresh' content='0,url=my_myimg.php'>";
?>