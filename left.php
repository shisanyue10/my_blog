<table width="236" height="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f9fb" >
	<tr>
		<td height="26" align="center" valign="top">
			<table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
				<tr width="100%" height="26">
					<td height="6" bgcolor="#ffffff" valign="top"><img src="images/cale_title.jpg"></td>
				</tr>
				<!-- <div height="16">
					<img src="images/cale_title.jpg">
				</div> -->
				<!-- <tr><?php require_once 'time.php'; ?></tr> -->
				<div align="top">
					<?php
						require_once 'caltest.php';
					?>

				<div>
			</table>
			
			  
		</td>
	</tr>
	<tr>
		<td height="125" align="center" valign="top"><table width="200" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><img src="images/tell_title.jpg" width="216" height="26"></td>
			</tr></table><br>
			<table width="200"  border="0" cellspacing="0" cellpadding="0">
		  <tr>
             <td><table width="201"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:5px;">
              <tbody>
                <tr>
                  <td style="WIDTH: 201px; HEIGHT: 99px" colspan=3 rowspan=2>
                  <?php
                        $p_sql = "select * from tb_public order by id desc";
                        $p_rst = mysql_query($p_sql,$link);
                       ?>
                       <marquee onMouseOver=this.stop()
                                style="WIDTH: 198px; HEIGHT: 99px" onMouseOut=this.start() 
                                scrollamount=2 scrolldelay=7 direction=up>
                              <span style="FONT-SIZE: 9pt"><center>
                               <?php
                               while($p_row = mysql_fetch_row($p_rst)){
                           ?>
                            <a href="#"
                             onclick="wopen=open('show_pub.php?id=<?php echo $p_row[0]; ?>','','height=200,width=500,scollbars=no')"><?php echo $p_row[1]; ?></a>
                             <?php
                                }
        
                            ?>
                              </center></span>
                          </marquee></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="201" align="center" valign="top">
			<table width="200" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="images/newimg_title.jpg" width="216" height="26"></td>
				</tr>
			</table>
			<br>
			<table width="145"  border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><table width="201"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:5px;">
					<?php 
						$sql=mysql_query("select id,tpmc,file from tb_tpsc order by scsj desc limit 2");
						while($info=mysql_fetch_array($sql)){
					 ?>
			 	<tr>
			 		<td width="9" rowspan="2"  align="center">&nbsp;
			 		<td width="147"  align="center">
			 		<div class="container">		
						<div class="examples">	
							<div class="row">
								<div class="example  col-md-12 col-xs-12 ">

									 <img src="<?php echo $info[file];?>" class="img-rounded" alt="" width="90" height="100" border="0">
								</div>
							</div>
						</div>	
						<script type="text/javascript">
							$('.example img').zoomify();
						</script>
					</div>
					</td>



			 		
			 		
			 		




				 		
			 		<td width="10" rowspan="2"  align="center">&nbsp;</td>
			 	</tr>
			 	<tr>
			 		<td  align="center"><a href="image.php?recid=<?php echo $info[id]; ?>">图片名称：<?php echo $info[tpmc];?></a></td>
			 	</tr>
			 	<?php } ?>
			 		<tr>
					  <td colspan="3" height="10" align="right"><a href="pic_more.php"><img src=" images/more.png" width="20" height="20" border="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>more...</a></td>
					</tr>
				 
				 </table>
			</td>
		</tr>
			</table>

		</td>
	</tr>
</table>
