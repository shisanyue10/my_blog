<?php
	define('HOST',"localhost");
	define('USERNAME',"root");
	define('PWD',"");
	define('DBNAME', "wearebolg");

	$link=mysql_connect("localhost","root","");
	mysql_select_db("wearebolg",$link);
	mysql_query("set names utf8");
	/*description:完成数据库连接
	 *para:无
	 *return：数据库连接
	*/
	function connectToDB(){
		$conn = mysqli_connect(HOST,USERNAME,PWD,DBNAME);
		if (mysqli_errno($conn)) {
			return null;
		}
		mysqli_set_charset($conn,"utf8");
		return $conn;
	}
	/*description:完成数据库查询，返回查询结果
	 *para:$sql 要查询的sql语句
	 *return:正确，返回查询结果，否则返回null
	*/
	function query($sql){
		$conn= connectToDB();
		if ($conn) {
			//取得查询结果
			$arr = array();
			$result = mysqli_query($conn,$sql);
			if ($result) {
				while ($row = mysqli_fetch_assoc($result)){
					$arr[] = $row;
				} 
				mysqli_close($conn);
				return $arr;//返回结果
			}
			mysqli_close($conn);
			return null;
		}
		return null;
	}
	function registerUser($userIfno){
		$conn = connectToDB();
		$sql = "INSERT INTO tb_user(regname, regrealname, regpwd, regbirthday, regemail, regcity,regsex, regqq,  regsign, regintroduce) VALUES('".$userIfno['regname']."','".$userIfno['regrealname']."','".md5($userIfno['regpwd'])."','".$userIfno['regbirthday']."','".$userIfno['regemail']."','".$userIfno['regcity']."','".$userIfno['regsex']."','".$userIfno['regqq']."','".$userIfno['regsign']."','".$userIfno['regintroduce']."')";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			return true;
		}
		else{
			return false;
		}
	}

	function addimg($files,$str_file,$upload_dir,$author){
		$conn=connectToDB();
		mysql_select_db("wearebolg",$conn);
		mysqli_set_charset($conn,"uft8");
		$sql="insert into tb_tpsc(file,author) values";
		$sql=$sql."('".$str_file."','".$author."')";
		mysqli_query($conn,$sql);
		mysql_close($conn);
		if (!file_exists($upload_dir)) {
			mkdir($upload_dir);
			
		}
		if (!move_uploaded_file($files["tmp_name"], $str_file)) {
			echo "图片上传失败";
			
		}
		else{
			echo "图片上传成功";
			
		}
	}
	function readimg($author){
		$conn=connectToDB();
		$sql="SELECT * FROM tb_tpsc where author='".$author."'";
		$result=mysqli_query($conn,$sql);
		if ($conn) {
			if ($result) {
				//取得查询结果集
				while ($row=mysqli_fetch_assoc($result)) {
					$arr[]=$row;
				}
				return $arr;
			}
			return null;
		}
	}
	function querybyid($id){
		$conn=connectToDB();
		$sql="SELECT * FROM tb_article where id=".$id." order by now desc";
		$result=mysqli_query($conn,$sql);
		if ($conn) {
			if ($result) {
				//取得查询结果集
				while ($row=mysqli_fetch_assoc($result)) {
					$arr[]=$row;
				}
				return $arr;
			}
			return null;
		}
	}
?> 