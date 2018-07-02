<?php
generateCheckCode(4,1);
//生成验证码
function generateCheckCode($num=4,$type=0){
	mt_srand(time());//伪随机数种子
	$width=$num*20;
	$high=30;
	//生成一个图像背景
	mt_srand(time());//伪随机数种子
	$image=imagecreatetruecolor($width,$high);
	$bgcolor=getRandColor($image,120,255);
	//$bgcolor=imagecolorallocate($image, red, green, blue)
	//填充图像
	imagefill($image,0, 0, $bgcolor);
	//填充点
	for($i=0;$i<200;$i=$i+1){
		imagesetpixel($image,mt_rand(0,$width-1), mt_rand(0,$high-1),getRandColor($image,0,120));
	}
	//干扰线
	for ($i=0; $i <4 ; $i++) { 
	imageline($image,mt_rand(0,$width-1), mt_rand(0,$high-1),mt_rand(0,$width-1), mt_rand(0,$high-1),getRandColor($image,0,120));
	}
	//生成验证码字符串
	  $code=generateCode($num,$type);

	for ($i=0; $i <$num ; $i++) { 
		$flag=mt_rand(-1,1);
		imagechar($image, 15, 5+$i*20,15-$i*2*$flag, $code[$i], getRandColor($image,0,120));
	}
	header("Content-Type:image/png");
     imagepng($image);


}
function getRandColor($image,$low,$high){
	
	return imagecolorallocate($image, mt_rand($low,$high), mt_rand($low,$high), mt_rand($low,$high));
}
function generateCode($num,$type){
           $str="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
           $pos=[9,35,61];
           $ch="";
           for ($i=0; $i < $num; $i++) { 
           	$range=$pos[$type];
           	$ch=$ch.$str[mt_rand(0,$range)];       }
           		return $ch;
	}
?> 