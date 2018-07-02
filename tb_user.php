<?php
    include "database.php";
    if (isset($_GET['regname'])) {
		//获得提交结果
		$regname = $_GET['regname'];
		$regrealname = $_GET['regrealname'];
		$regpwd = $_GET['regpwd'];
		$regbirthday = $_GET['regbirthday'];
		$regemail = $_GET['regemail'];
		$regconform=$_GET['regconform'];
		$regcity=$_GET['regcity'];
		$regsex = $_GET['regsex'];
		$regqq = $_GET['regqq'];
		$regsign =$_GET['regsign'];
		$regintroduce = $_GET['regintroduce'];

		$regnameError = $regpwdError = $regrealnameError = $regbirthdayError = $regconformError = $regemailError = null;
		
		$res = true;
		if (empty($regname)) {
			$regnameError = "用户名不能为空";
			$res = false;
		}
		if (empty($regpwd)) {
			$regpwdError = "密码不能为空";
			$res = false;
		}
		if ($regpwd != $regconform) {
			$regconformError = "两次输入不一致";
			$res = false;
		}
		if (empty($regrealname)) {
			$regrealnameError = "真实姓名不能为空";
			$res = false;
		}
		if (empty($regbirthday)) {
			$regbirthdayError = "生日不能为空";
			$res = false;
		}
		if (empty($regemail)) {
			$regemailError = "生日不能为空";
			$res = false;
		}
		if ($res) {
			$arr = ["regname"=>$regname,"regpwd"=>$regpwd,"regemail"=>$regemail,"regrealname"=>$regrealname,"regbirthday"=>$regbirthday,"regcity"=>$regcity,"regsex"=>$regsex,"regqq"=>$regqq,"regsign"=>$regsign,"regintroduce"=>$regintroduce];
			if (registerUser($arr)){
				echo "注册成功";
			}
			else{
				echo "注册失败";
			}
		}echo "<meta http-equiv = 'Refresh' content = '0,url = main.php'>";
	}
?>
<form action="tb_user.php" method="get">
	<table background="images/bg.jpg" align=center valign=middle width="757">
		<tr align="left">
		<td height="22" colspan="2" class="right_head">
		<span class="tableBorder_LTR">必填内容</span>
		</td>
	</tr>
	<tr>
		<td width="25%" align="left">用户名 ：</td>
		<td><input type="test" name="regname"></td>
		<td><?php
		$flag=true;
		 if (!$flag) {
		echo $regnameError;
		}
		$flag=false;
		 ?></td>
	</tr>
	<tr>
		<td width="25%">真实姓名：</td>
		<td><input type="test" name="regrealname">
		</td>
		<td><?php
		$flag=true;
		 if (!$flag) {
		echo $regnameError;
		}
		$flag=false;
		 ?></td>
	</tr>
	<tr>
		<td>密   码：</td>
		<td><input type="password" name="regpwd" >密码不少于3位
		<td><?php
		$flag=true;
		 if (!$flag) {
		echo $regnameError;
		}
		$flag=false;
		 ?></td>
	</tr>
	<tr>
		<td>确认密码：</td>
		<td><input type="password" name="regconform"></td>
		<td><?php
		$flag=true;
		 if (!$flag) {
		echo $regnameError;
		}
		$flag=false;
		 ?></td>
	</tr>
	<tr>
		<td>邮    箱：</td>
		<td><input type="text" name="regemail" ></td>
		<td><?php
		$flag=true;
		 if (!$flag) {
		echo $regnameError;
		}
		$flag=false;
		 ?></td>
	</tr>
	<tr>
		<td>生   日：</td>
		<td align="left"><input type="text" name="regbirthday">
		(日期格式为yyyy-mm-dd)</td>
		<td><?php
		$flag=true;
		 if (!$flag) {
		echo $regnameError;
		}
		$flag=false;
		 ?></td>
		 </tr>
	<tr align="left">
		<td height="22" colspan="2" class="right_head">
		<span class="tableBorder_LTR">选填内容</span>
		</td>
	</tr>

	<tr>
		<td width="25%">城    市：</td>
		<td><input type="text" name="regcity"></td>
		<td><?php ?></td>
	</tr>

	<tr>
		<td>性    别：</td>
		<td>
		<select size="1" name="regsex">
					<option value="1">男</option>
					<option value="2">女</option>
					<option value="0">保密</option>
				</select></td>
	</tr>
	
	<tr>
		<td width="25%">Q Q 账号：</td>
		<td><input type="text" name="regqq"></td>
		<td><?php ?></td>
	</tr>
	<tr>
		<td>个性签名：</td>
		<td><textarea cols="20" rows="2" name="regsign"></textarea></td>
		<td><?php ?></td>
	</tr>
	<tr>
		<td>自我简介：</td>
		<td><textarea cols="20" rows="2" name="regintroduce"></textarea></td>
		<td><?php ?></td>
	</tr>
	<tr><td>
	<input type="submit" name="regsubmit" value="注册">
	</td>
	</tr>
</table>
</form>

