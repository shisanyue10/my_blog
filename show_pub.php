<?php
session_start();
include "conn.php";
error_reporting(0); 
$pubsql = "select * from tb_public where id=".$_GET[id];
$pubrst = mysql_query($pubsql,$link);
$pubrow = mysql_fetch_row($pubrst);
if($pubrst!=""){
?>
<script language="javascript">
	alert($pubrow[2]);
	window.location.href="main.php";
</script>
<?php
}else{
?>
<script language="javascript">
	window.location.href="main.php";
</script>
<?php
	}
?>

		
<?php
	session_start();
	include "conn.php";
	$pubsql = "select * from tb_public where id=".$_GET[id];
	$pubrst = mysql_query($pubsql,$link);
	$pubrow = mysql_fetch_row($pubrst);
	echo "$pubrow[2]";
?>
