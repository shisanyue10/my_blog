<?php 
	session_start();
	include "conn.php";
	error_reporting(0);
	$file_id1=$_GET[file_id];
	$bool = false;
	error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>wearebolg</title>
	<script src="JS/check.js" language="javascript">
</script>
<script language="javascript">
	function r_check(){
if (document.myform.txt_content.value==""){
	alert("评论内容不能为空!");myform.txt_content.focus();return false;
}
}
function d_chk(urlstr){
	if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
		return true;
	}
	else
		return false;   
}
function fri_chk(){
if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
		return true;
	}
	else
		return false;   
}
</script>
</head>
<link href="CSS/style.css" rel="stylesheet"/>

<body>
	<table width="757" border="0" align="center" cellpadding="0" cellspacing="0" style="border-right:1px solid  #000000">
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
									<td width="55"><a href="<?php echo (!isset($_SESSION[username])?'Regpro.php':'safe.php'); ?>"><span style="FONT-SIZE: 12pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
									<td width="23">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="56" align="right"><p>&nbsp;</p></td>
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
		<tr height="2"></tr>





		<tr align="center" align=center valign=middle>		
		<TR align="center"> 
      <TD colSpan=3 valign="baseline" style="background-color:#d7eaf6; VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br> 
        <br> 
        <table width="756" height="100%"  border="0" cellpadding="0" cellspacing="0"> 
          <tr> 
            <td height="130" align="center" valign="middle"><table width="560" align="center" cellpadding="3" cellspacing="1" bgcolor="#98CAE8"> 
                <tr align="left" colspan="2" > 
                  <td width="390" height="25" colspan="3" valign="middle" bgcolor="#9ef469">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="tableBorder_LTR"><font size="5">博客文章</font></span> </td> 
                </tr> 
                <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                      <tr> 
                        <td> <?php 
						$sql=mysql_query("select * from tb_article where id=".$file_id1);
						$result=mysql_fetch_array($sql);
				  ?> 
                          <table width="100%" rules=rows> 
                            <tr bgcolor="#ffffff"> 
                              <td width="18%" align="center"><font size="4">作
                                者:</font></td> 
                              <td width="18%"><font size="4"><?php echo $result[author]; ?></font></td> 
                              <td width="25%" align="center"><font size="3">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发表时间:</font></td> 
                              <td width="50%"><font size="3"><?php echo $result[now]; ?></font></td> 
                            </tr> 
                            <tr bgcolor="#ffffff"> 
                              <td align="center"><font size="4">博客主题:</font></td> 
                              <td colspan="5" align="center"><font size="4"><?php echo $result[title]; ?></font></td> 
                            </tr> 
                            <tr bgcolor="#ffffff"> 
                              <td align="center"><font size="4">文章内容:</font></td> 
                              <td colspan="4" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="3"><?php echo $result[content]; ?></font></td> 
                              <td><?php 
									  if($_SESSION[fig]==1 and ($_SESSION[username] == $result[author])){
									  $bool = true;
									?> 
                                      <a href="del_file.php?file_id=<?php echo $result[id];?>"><div style="text-align:center"><img src="images/A_delete.png" width="28" height="28" alt="删除博客文章" onClick="return fri_chk();"></div></a> 
                                      <?php
										}
									 ?>
							  </td>
                            </tr> 
                          </table></td> 
                      </tr> 
                    </table></td> 
              </table></td> 
          </tr> 
          <tr> 
            <td height="106" align="center" valign="top"><?php if ($_GET[page]=="") {$_GET[page]=1;}; ?> 
              <table width="560"  align="center" cellpadding="3" cellspacing="1" bgcolor="#98CAE8"> 
                <tr align="left" colspan="2" > 
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#9EF469">&nbsp;<span><font size="5">&nbsp; 查看相关评论<font></span> </td> 
                </tr> 
                <?php
						if ($_GET[page]){
						   $page_size=3;     //每页显示4条记录
						   $query="select count(*) as total from tb_filecomment where fileid='$file_id1' order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($_GET[page]-1)*$page_size;			//计算下一页从第几条数据开始循环  
							for ($i=1; $i<2; $i++) {         //计算每页显示几行记录信息
							if ($i==1) {
								$sql=mysql_query("select * from tb_filecomment where fileid='$file_id1' order by id desc limit $offset, $page_size");			
								$result=mysql_fetch_array($sql);
								}
							if($result==false){
								echo "<font color=#8BC1DD>对不起，没有相关评论!</font>";
							}
							else{
								do{
							?> 
                <tr> 
                  <td height="57" align="center" valign="top" ><table width="480"cellpadding="0" cellspacing="0" rules=rows bordercolor="#9EF469"> 
                      <tr bgcolor="#ffffff"> 
                        <td width="19%" align="center"><font size="4">评论人:<font></td> 
                        <td width="19%"><font size="4"><?php echo $result[username]; ?><font></td> 
                        <td width="25%" align="center"><font size="4">|&nbsp;&nbsp;&nbsp;评论时间:<font></td> 
                        <td width="37%"><?php echo $result[datetime]; ?><font size="4"><font></td> 
                      </tr> 
                      <tr bgcolor="#ffffff"> 
                        <td align="center"><font size="4">评论内容:<font></td> 
                        <td colspan="4"><font size="3"><?php echo $result[content]; ?><font></td> 
                        <td>
						<?php 
									if ($bool){
								?>
                                <a href="del_comment.php?comment_id=<?php echo $result[id]?>"><div style="text-align:center"><img src="images/A_delete.png" width="28" height="28" alt="删除博客文章评论" onClick="return d_chk();"></div></a>
                                <?php
									}
								?>						</td>
                      </tr> 
                    </table></td> 
                </tr> 
                <?php 
								}while($result=mysql_fetch_array($sql));
								}
							?> 
              </table> 
              <table width="560" border="0" align="center" cellpadding="0" cellspacing="0"> 
                <tr bgcolor="#000000"> 
                  <td width="52%" bgcolor="#9EF469">&nbsp;&nbsp;页次：<?php echo $_GET[page];?>/<?php echo $page_count;?>页
                    记录：<?php echo $message_count;?> 条&nbsp;</td> 
                  <td align="right" bgcolor="#9EF469">
				  <?php
				  if($_GET[page]!=1)
				   {
				     echo  "<a href=article.php?page=1&file_id=".$file_id1.">首页</a>&nbsp;";
					 echo "<a href=article.php?page=".($_GET[page]-1)."&file_id=".$file_id1.">上一页</a>&nbsp;";
				   }
				  if($_GET[page]<$page_count)
				   {
				        echo "<a href=article.php?page=".($_GET[page]+1)."&file_id=".$file_id1.">下一页</a>&nbsp;";
				        echo  "<a href=article.php?page=".$page_count."&file_id=".$file_id1.">尾页</a>";
				   }
				 } 
				 }
				?> </td> 
                </tr> 
              </table></td> 
          </tr>
          <tr>
            <td height="107" align="center" valign="top">
			<!--  发表评论  -->
			<form name="myform" method="post" action="check_comment.php">
 				   <table width="560" border="0" align="center" cellpadding="2" cellspacing="1" bordercolor="#ffffff" bgcolor="#ffffff">
                      <tr align="left" colspan="2" >
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#9EF469"> <span><SPAN  style="FONT-SIZE:3; COLOR: #ffffff"></SPAN></span><span class="tableBorder_LTR"><font size="5">&nbsp;&nbsp;&nbsp;发表评论</span></font> </td>
                      </tr>
 				   <td height="112" align="center" valign="top" >
       			     <input name="htxt_fileid" type="hidden" value="<?php echo $_GET[file_id];?>">
       			     <table width="500"  border="0" cellpadding="1" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
				    <tr>
					  <td align="top"><font size="4">我要评论:</font></td>
					  <td width="410">
					  
					  <textarea name="txt_content" cols="66" rows="8" id="txt_content" ></textarea>

					  </td>
				    </tr>
				    <tr align="center">
					  <td colspan="2"><font size="3"><input type="submit" name="submit" value="提交" onClick="return r_check();"></font>
					    &nbsp;&nbsp;
					    <input type="reset" name="submit2" value="重置"></td>
				    </tr>
				  </table>			    </td>
              </table>
			  </form>
		    </td>
          </tr> 
        </table></TD> 
    </TR> 
		</tr>
		<tr height="1"></tr>
	</table>
	<?php
		require_once 'footer.php';
	?>
</body>
</html>