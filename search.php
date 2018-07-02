<?php 
	session_start();
	include "conn.php";
	error_reporting(0); 
	$keyboard=$_POST[keyboard];
	$classid=$_POST[classid];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>wearebolg</title>
	<bgsound src=music.mp3 loop="-1">
	<link rel="stylesheet" href="CSS/bootstrap-grid.min.css">
	<link rel="stylesheet" href="dist/zoomify.min.css">
	<link rel="stylesheet" href="CSS/stylejsa.css">
	<link rel="stylesheet" href="CSS/main_base.css" />	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="dist/zoomify.min.js"></script>
	<style type="text/css">
		/* search */
		.search{border:2px solid #0ad940;height:35px;margin:13px;width:325px;}
		.search select{display:none;}
		.search .select_box{font-size:12px;color:#000000;width:100px;line-height:35px;float:left;position:relative;}
		.search .select_showbox{height:35px;background:url(images/search_ico.png) no-repeat 80px center;text-indent:1.5em;}
		.search .select_showbox.active{background:url(images/search_ico_hover.png) no-repeat 80px center;}
		.search .select_option{border:2px solid #0ad940;border-top:none;display:none;left:-2px;top:35px;position:absolute;z-index:99;background:#fff;}
		.search .select_option li{margin-left: -39px; text-indent:1em;width:80px;cursor:pointer;}
		.search .select_option li.selected{background-color:#ffffff;color:#000000;}
		.search .select_option li.hover{background:#0aa3d9;color:#fff;}
		.search input.inp_srh,.search input.btn_srh{border:none;background:none;height:33px;line-height:33px;float:left}
		.search input.inp_srh{outline:none;width:160px;}
		.search input.btn_srh{background:#0ad940;color:#FFF;font-family:"微软雅黑";font-size:12px;width:61px;}
	</style>
</head>
<link href="CSS/style.css" rel="stylesheet"/>
<script src="JS/check.js" language="javascript">
</script>
<body>
	
	<table width="757" border="0" align="center" cellpadding="0" cellspacing="0" style="border-right:1px solid  #ffffff">
		<tr align="right" valign="top">
			<td height="202" colspan="2" background="images/head.jpg">

				<table width="100%" height="202"  border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="51" align="right"><br><br><br><br><br><br>
							<table width="262" border="0" cellspacing="0" cellpadding="0">
								<tr align="left">

									<td width="26" height="20"><a href="main.php"></a></td>
									<td width="51" class="word_white"><a href="main.php"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
									<td width="67"><a href="my_main.php"><span  style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
									<td width="55"><a href="<?php echo (!isset($_SESSION[username])?'regist.php':'safe.php'); ?>"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
									<td width="23">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="56" align="left">
							<div class="search radius6">
								<form name="searchform" method="post" action="search.php">
									<input name='ecmsfrom' type='hidden' value='9'>
									<input type="hidden" name="show" value="title,newstext">
									<select name="classid" id="choose">
										<option value="0">搜索全部</option>
										<option value="1"> 内   容  </option>
										<option value="4"> 作   者  </option>
										<option value="22"> 标  题  </option>
									</select> 
									<input class="inp_srh" name="keyboard"  placeholder="请输入您要搜索的文章" >
									<input class="btn_srh" type="submit" name="submit" value="搜索">
								</form>
							</div>
							<script type="text/javascript" src="JS/jquery.select.js"></script>
						</td>
					</tr>
					<tr>
						<form name="form" method="post" action="checkuser.php">
							 <td height="20" valign="baseline">
							 	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
							 		<tr>
							 			<td width="55%" height="20" align="center" valign="baseline">&nbsp;</td>
							 			<td width="45%" align="left" valign="baseline" style="text-indent:10px;">
							 				
							 				<?php 
							 					if (!isset($_SESSION[username])) {
							 				 ?>
							 				 用户名：<input  name=txt_user size="10">
							 				 密码：<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">&nbsp;&nbsp;&nbsp;

							 			<input style="FONT-SIZE: 9pt"  type="submit" value="登录">&nbsp;
										 				 <?php }else{ ?>
										 				 <font size="5" color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wearebolg欢迎您<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前时间：<font color="red"><?php echo date("Y-m-d l"); ?></font>
										 				 <?php } ?>
										 			</td>
										 		</tr><br>
									<tr>
							 					<!-- <td width="1%" align="center" valign="baseline">&nbsp;</td> -->
							 		</tr>
							 	</table>
							 </td>
						</form>
					</tr>
				</table>
			</td>
		</tr>
		<tr>		
			<td width="521" align="center" >
				<table width="100%" height="530"  border="0" cellpadding="0" cellspacing="0" table bgcolor=#def1f5>
					<tr>
						<td height="39" valign="top"><img src="images/newfile_title.jpg" width="517" height="39"></td>
					</tr>
					<tr>
					          <td height="522" align="top"><table style="WIDTH: 480px" cellspacing=0 cellpadding=0>
					            <?php 
					              $sql=mysql_query("select id,title,author,now from tb_article where author='".$keyboard."' order by now desc limit 5");
					              $i=1;
					              while($info=mysql_fetch_array($sql)){
					             ?>
					             <tr width="430">
					              <td width="426" align="top" valign="top" colspan="2">
					                &nbsp;&nbsp;&nbsp;
					                <a style="FONT-SIZE: 16pt; COLOR: #000000"; href="article.php?file_id=<?php echo $info[id];?>"
					                ><?php echo $i."、".substr($info[title],0,66);?></a>
					              </td>
					             </tr>
					              <tr>
					              	<td align="right"> <?php echo "作者：".$info[author];?></td>
					                <td align="right" width="226"><?php echo "发表时间：".$info[now];?></td>
					             </tr>
					             
					             <td height="39" align="right">&nbsp;&nbsp;&nbsp;<th/></td>					             
					             <?php $i=$i+1; } ?>
					            <tr  align="right">
								  	<td colspan="3" height="30" align="right"><a href="search_file_more.php?$keyboard=<?php echo $info[keyboard];?>"><img src=" images/more.png" width="30" height="30" border="0">&nbsp;&nbsp;&nbsp;<br>more...</a></td>
								</tr>
					             
					        </table></td>
					</tr>

					<tr>
						<td height="50">&nbsp;</td>
					</tr>
					<tr>
						<td height="50">&nbsp;</td>
					</tr>
					
				</table>
			</td>
			<td width="236" height="560" background="images/head.jpg">
				<?php require_once 'left.php'?>
			</td>

		</tr>
	</table>
	<?php
		require_once 'footer.php';
	?>





</body>
</html>