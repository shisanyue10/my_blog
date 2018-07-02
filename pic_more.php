<?php 
  session_start();
  include "conn.php";
  error_reporting(0); 
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>wearebolg</title>
  <bgsound src=music.mp3 loop="-1">
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
    <tr>   
  <tr height="2"></tr>
      <tr>
                    
                    <td width="521" height="496" align="center" background="images/bg.jpg">
                    <table width="100%" height="490"  border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="372" align="center">
                    <!-- 文章列表-->
                    <table width="60%" height="372"  border="0" cellpadding="0" cellspacing="0" style="margin-top:5px;">
                          <tr>
                            <td height="370" align="center" valign="top"><?php if ($_GET[page]=="") {$_GET[page]=1;}; ?>
                <table width="100%" align="center" cellpadding="3" cellspacing="1" bordercolor="#ffffff" bgcolor="#ffffff">
                                <tr align="left" colspan="2" >
                                  <td height="25" colspan="3" valign="middle" bgcolor="#9EF469"> <font size="5">&nbsp;&nbsp;&nbsp;浏览全部图片</font> </td>
                                </tr>
                                  <?php
                            if ($_GET[page]){
                               $page_size=6;     //每页显示20条记录
                               $query="select count(*) as total from tb_tpsc order by id desc";   
                              $result=mysql_query($query);       //查询总的记录条数
                              $message_count=mysql_result($result,0,"total");       //为变量赋值
                              $page_count=ceil($message_count/$page_size);    //根据记录总数除以每页显示的记录数求出所分的页数
                              $offset=($_GET[page]-1)*$page_size;     //计算下一页从第几条数据开始循环  
                              ?>
                                <tr>

                          <?php
                          $sql=mysql_query("select * from tb_tpsc order by id desc limit $offset, $page_size");
                          $i=1;
                          while($info=mysql_fetch_array($sql)){
                            if($i%2==0){
                          ?>
                                  <td height="39" align="middle" valign="middle" >
                          <!--显示图片-->
                          <table width="180"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
                            <tr>
                            <td width="20" rowspan="2"  align="center">                                      </td>
                            <td width="147"  align="center">
                            <a href="image.php?recid=<?php echo $info[id]; ?>"><img src="<?php echo $info[file];?>"  width="120" height="80" border="0"></a>                                                            </td>
                            <td width="10" rowspan="2"  align="center">&nbsp;</td>
                          </tr>
                          <tr>
                            <td  align="center">图片名称：<?php echo $info[tpmc];?></td>
                          </tr>
                        </table>
                               </td>
                                </tr>
                                <?php
                          }else{
                          ?>
                                  <td height="31" align="left" valign="middle" >
                          <!--显示图片-->
                          <table width="180"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
                            <tr>
                            <td width="9" rowspan="2"  align="center">&nbsp;                                        </td>
                            <td width="147"  align="center">
                            <a href="image.php?recid=<?php echo $info[id]; ?>"><img src="<?php echo $info[file];?>"  width="120" height="80" border="0"></a>                                                            </td>
                            <td width="10" rowspan="2"  align="center">&nbsp;</td>
                          </tr>
                          <tr>
                            <td  align="center">图片名称：<?php echo $info[tpmc];?></td>
                          </tr>
                        </table>
                         </td>
                        <?php
                          }
                          $i++;}
                        ?>
                              </table>
                              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr bgcolor="#EFF7DE">
                                  <td width="73%" align="left" valign="middle" bgcolor="#9EF469">&nbsp;&nbsp;页次：<?php echo $_GET[page];?>/<?php echo $page_count;?>页
                                    记录：<?php echo $message_count;?> 条&nbsp; </td>
                                  <td width="27%" align="right" bgcolor="#9EF469" class="hongse01">
                                          <?php
                              if($_GET[page]!=1)
                               {
                               echo  "<a href=pic_more.php?page=1>首页</a>&nbsp;";
                               echo "<a href=pic_more.php?page=".($_GET[page]-1).">上一页</a>&nbsp;";
                               }
                              if($_GET[page]<$page_count)
                               {
                                echo "<a href=pic_more.php?page=".($_GET[page]+1).">下一页</a>&nbsp;";
                                echo  "<a href=pic_more.php?page=".$page_count.">尾页</a>";
                               }
                             } 
                            ?>                  </td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                    
                    </td>
                      </tr>
                      <tr>
                        <td height="26">&nbsp;</td>
                      </tr>
                    </table>
                  </td>








    </tr>
    <tr height="2"></tr>
  </table>
  <?php
    require_once 'footer.php';
  ?>
</body>
</html>