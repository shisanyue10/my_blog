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
    <tr height="1"></tr>
            <tr>
              <td width="521" height="501" align="center" bgcolor="#85D4E1">
              <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
              
                <tr>
                  <td height="498" align="center" valign="top">
              <!-- 文章列表-->
                    <table width="96%" height="493"  border="0" cellpadding="0" cellspacing="0" >
                    <tr height="20"></tr>
                    <tr>
                      <td  align="center" valign="top"><?php if ($_GET[page]=="") {$_GET[page]=1;}; ?>
                          <table width="100%" height="490" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
                                      <tr align="left" height="10">
                                        <td height="10" colspan="3" valign="center" bgcolor="#9EF469"><font size="5">查看全部博客文章:</font> </td>
                                      </tr>
                                            <?php
                                              if ($_GET[page]){
                                                 $page_size=6;     //每页显示20条记录
                                                 $query="select count(*) as total from tb_article where author='月三星' order by id desc";   
                                                $result=mysql_query($query);       //查询总的记录条数
                                                $message_count=mysql_result($result,0,"total");       //为变量赋值
                                                $page_count=ceil($message_count/$page_size);    //根据记录总数除以每页显示的记录数求出所分的页数
                                                $offset=($_GET[page]-1)*$page_size;     //计算下一页从第几条数据开始循环  
                                                for ($i=1; $i<2; $i++) {         //计算每页显示几行记录信息
                                                if ($i==1) {
                                                  $sql=mysql_query("select id,title,author,now from tb_article where author='月三星' order by id desc limit $offset, $page_size");     
                                                  }
                                             ?>
                                      <tr col>
                                        <td height="200" align="left" valign="top" ><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                        <tr height="30"></tr>
                                          <tr>
                                            <td align="left" valign="middle"><table border="0" cellspacing="0" cellpadding="0" valign="top">
                                                <?php
                                                    $i=1;
                                                    while($info=mysql_fetch_array($sql)){
                                                ?>

                                                <tr width="426">
                                                      <td width="426" align="top" valign="top" colspan="2">
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a style="FONT-SIZE: 12pt; COLOR: #000000"; href="article.php?file_id=<?php echo $info[id];?>"
                                                        ><?php echo $i."、".substr($info[title],0,66);?></a>
                                                      </td>
                                                     </tr>
                                                <tr>
                                                        <td align="right"> <?php echo "作者：".$info[author];?></td>
                                                        <td align="right" width="226"><?php echo "发表时间：".$info[now];?></td>
                                                     </tr>
                                                     
                                                     <td height="39" align="right">&nbsp;&nbsp;&nbsp;<th/></td>   


                                                <?php 
                                                    $i=$i+1;
                                                 }
                                               ?>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <?php
                                }while($result=mysql_fetch_array($sql));
                              ?>
                        </table>
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr bgcolor="#ffffff">
                            <td width="50%" align="left" valign="middle" bgcolor="#9EF469">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页次：<?php echo $page;?><?php echo $page_count;?>页
                              记录：<?php echo $message_count;?> 条&nbsp; </td>
                            <td width="50%" align="right" bgcolor="#9EF469" class="hongse01">
                                    <?php
                                          if($_GET[page]!=1)
                                           {
                                           echo  "<a href=search_file_more.php?page=1>首页&nbsp;&nbsp;&nbsp;</a>&nbsp;";
                                           echo "<a href=search_file_more.php?page=".($_GET[page]-1).">上一页&nbsp;&nbsp;&nbsp;</a>&nbsp;";
                                           }
                                          if($_GET[page]<$page_count)
                                           {
                                            echo "<a href=search_file_more.php?page=".($_GET[page]+1).">下一页&nbsp;&nbsp;&nbsp;</a>&nbsp;";
                                            echo  "<a href=search_file_more.php?page=".$page_count.">尾页&nbsp;&nbsp;&nbsp;</a>";
                                           }
                                         } 
                                    ?>                  </td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr height="12"></tr>
  </table>
  <?php
    require_once 'footer.php';
  ?>
</body>
</html>