<?php 
    $checkcode = strtolower($_GET['checkcode']);
    session_start();
    include "common/database.php";
    include "conn.php";
    error_reporting(0); 
    $name=$_POST[txt_user];
    $pwd=md5($_POST[txt_pwd]);
    

    if (isset($_COOKIE['checkcode'])) {
        $code = strtolower($_COOKIE['checkcode']);
        if ($checkcode != $code) {
              header("location:alert.php?code={$code}&checkcode={$checkcode}&error=验证码错误");
              session_unset(); 
        }
        else{//验证用户名和密码
            $sql=mysql_query("select * from tb_user where regname='".$name."' and regpwd='".$pwd."'");
                $result=mysql_fetch_array($sql);
                if($result!=""){
                $_SESSION[fig]=$result[fig];
                $_SESSION[username]=$name;

               echo "<script>alert('登录成功');window.location.href='main.php';</script>";

                }else{

                echo "<script>alert('对不起，您输入的用户名或密码不正确，请重新输入!');window.location.href='login.php';</script>";

                    }

        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>用户登录</title>
<meta charset="utf-8">
<link href="css/home.css?v=2" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
</head>
<body>
<div class="wrap">
  <div class="banner-show" id="js_ban_content">
    <div class="cell bns-01">
      <div class="con"> </div>
    </div>
    <div class="cell bns-02" style="display:none;">
      <div class="con"> <a href="http://www.js-css.cn" target="_blank" class="banner-link"> <i>你好</i></a> </div>
    </div>
    <div class="cell bns-03" style="display:none;">
      <div class="con"> <a href="http://www.js-css.cn" target="_blank" class="banner-link"> <i>大家好</i></a> </div>
    </div>
  </div>
  <div class="banner-control" id="js_ban_button_box"> <a href="javascript:;" class="left">左</a> <a href="javascript:;" class="right">右</a> </div>
  <script type="text/javascript">
                ;(function(){
                    
                    var defaultInd = 0;
                    var list = $('#js_ban_content').children();
                    var count = 0;
                    var change = function(newInd, callback){
                        if(count) return;
                        count = 2;
                        $(list[defaultInd]).fadeOut(400, function(){
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                        $(list[newInd]).fadeIn(400, function(){
                            defaultInd = newInd;
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                    }
                    
                    var next = function(callback){
                        var newInd = defaultInd + 1;
                        if(newInd >= list.length){
                            newInd = 0;
                        }
                        change(newInd, callback);
                    }
                    
                    var start = function(){
                        if(start.timer) window.clearTimeout(start.timer);
                        start.timer = window.setTimeout(function(){
                            next(function(){
                                start();
                            });
                        }, 8000);
                    }
                    
                    start();
                    
                    $('#js_ban_button_box').on('click', 'a', function(){
                        var btn = $(this);
                        if(btn.hasClass('right')){
                            //next
                            next(function(){
                                start();
                            });
                        }
                        else{
                            //prev
                            var newInd = defaultInd - 1;
                            if(newInd < 0){
                                newInd = list.length - 1;
                            }
                            change(newInd, function(){
                                start();
                            });
                        }
                        return false;
                    });
                    
                })();
            </script>
  <div class="container">
    <div class="register-box">
    <form action="login.php">
      <div class="reg-slogan"> 用户登录</div>
      <div class="reg-form" id="js-form-mobile"> <br>
        <br>
        <div class="cell "><center>
          
          <font size="5">用户名:</font><input type="text" name="txt_user" id="js-mobile_ipt" class="text" maxlength="11" /></center>
        </div>
        <div class="cell">
          <center>
          
          <font size="5">密码:</font><input type="password" name="txt_pwd" id="js-mobile_pwd_ipt" class="text" /></center>
          </div>
        <!-- !验证码 -->
        <div class="cell vcode">
          <input type="text" name="checkcode" id="js-mobile_vcode_ipt" class="text" maxlength="6" />
          <img  src="common/check.php" onclick="this.src='common/check.php?'+Math.random()">
        </div>
        <div class="bottom"> 
        <a id="js-mobile_btn" href="javascript:;" class="button btn-green"><center><input style="FONT-SIZE: 9pt"  type="submit" value="登录" id="js-mobile_btn" class="button btn-green" ></center></a></div>
      </div></form>
    </div>
  </div>
</div>
</body>
</html>
